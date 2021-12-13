<?php

use simplehtmldom\HtmlWeb;

// Generates near-ready class definitions for parcel templates
function generateClasses() {
  $docs_html = file_get_contents('https://goshippo.com/docs/reference#parcel-templates');
  $str = "<p>hi</p>";
  $html = (new HtmlWeb())->load('https://goshippo.com/docs/reference#parcel-templates');
  $sets = [];
  foreach ($html->find('[id^=parcel-templates-]') as $section) {
    $section_id = $section->id;
    $h2 = $section->find('h2.h1-xs');
    $section_heading = $section->find('h2.h1-xs')[0]->innertext();
    $table = $section->find('table')[0];
    $section_parcel_metadata = [];
    foreach ($table->find('tr') as $tr) {
      $tds = $tr->find('td');
      $token = $tds[0]->innertext();
      $name = str_replace("'", "\'", $tds[1]->innertext());

      $dims_tag = $tds[2]->innertext();
      $dims_arr = explode(' x ', $dims_tag);
      $dims['length'] = $dims_arr[0];
      $dims['width'] = $dims_arr[1];
      $height_with_unit = $dims_arr[2];
      $height_split = explode(' ', $height_with_unit);
      $dims['height'] = $height_split[0];
      $dims['unit'] = 'DistanceUnit::' . strtoupper($height_split[1]);

      $section_parcel_metadata[] = [
        'token' => $token,
        'name' => $name,
        'dimensions' => $dims,
      ];
    }
    $sets[$section_id] = [
      'name' => $section_heading,
      'parcels' => $section_parcel_metadata,
    ];
  }

  $sets_stringy = [];
  foreach ($sets as $k => $set) {
    $stringy = '';
    $parcel_definitions_strings = array_map(function ($parcel) use ($set) {
      $key_short = str_replace("{$set['name']}_", '', $parcel['token']);
      $method_name = camelCase($key_short);
      return "public static function $method_name() { return new ParcelTemplate('{$parcel['token']}', '{$parcel['name']}', new ParcelDimensions({$parcel['dimensions']['length']}, {$parcel['dimensions']['width']}, {$parcel['dimensions']['height']}, {$parcel['dimensions']['unit']})); }";
    }, $set['parcels']);
    $sets_stringy[$k] = [
      'name' => $set['name'],
      'definitions_strings' => $parcel_definitions_strings,
    ];
  }

  $classes = [];
  foreach ($sets_stringy as $set_stringy) {
    $class_name = $set_stringy['name'];
    $class_open = "<?php namespace Handcrafted\Shippo\Enum\Api\ParcelTemplate; use Handcrafted\Shippo\Enum\DistanceUnit; final class $class_name extends ImitationEnum implements ParcelProviderInterface { public static function listAllParcelTemplates(): array { \$methods = get_class_methods('Handcrafted\Shippo\Enum\Api\ParcelTemplate\\$class_name'); \$results = []; foreach (\$methods as \$method) { if (\$method === 'listAllParcelTemplates') { continue; } \$results[] = self::{\$method}(); } return \$results;}";

    // Here need to build $class->allParcelTemplates()
    // actually no
    // instead use get_class_methods()

    $class_contents = array_reduce($set_stringy['definitions_strings'], fn(string $contents, string $method) => "$contents $method", '');
    $class_close = "}";
    $classes[] = $class_open . $class_contents . $class_close;
  }
  return $classes;
}