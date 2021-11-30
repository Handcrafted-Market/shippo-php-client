<?php

namespace Handcrafted\Shippo\Enum\Api\ServiceLevel;

enum DhlExpress: string {

  case DOMESTIC_EXPRESS_DOCK = "dhl_express_domestic_express_doc";

  case ECONOMY_SELECT_DOC = "dhl_express_economy_select_doc";

  case WORLDWIDE_NONDOC = "dhl_express_worldwide_nondoc";

  case WORLDWIDE_DOC = "dhl_express_worldwide_doc";

  case WORLDWIDE = "dhl_express_worldwide";

  case WORLDWIDE_EU_DOC = "dhl_express_worldwide_eu_doc";

  case BREAK_BULK_EXPRESS_DOC = "dhl_express_break_bulk_express_doc";

  case EXPRESS_9_00_NONDOC = "dhl_express_express_9_00_nondoc";

  case ECONOMY_SELECT_NONDOC = "dhl_express_economy_select_nondoc";

  case BREAK_BULK_ECONOMY_DOC = "dhl_express_break_bulk_economy_doc";

  case EXPRESS_9_00_DOC = "dhl_express_express_9_00_doc";

  case EXPRESS_10_30_DOC = "dhl_express_express_10_30_doc";

  case EXPRESS_10_30_NONDOC = "dhl_express_express_10_30_nondoc";

  case EXPRESS_12_00_DOC = "dhl_express_express_12_00_doc";

  case EUROPACK_NONDOC = "dhl_express_europack_nondoc";

  case EXPRESS_ENVELOPE_DOC = "dhl_express_express_envelope_doc";

  case EXPRESS_12_00_NONDOC = "dhl_express_express_12_00_nondoc";

  case EXPRESS_12_DOC = "dhl_express_express_12_doc";

  case WORLDWIDE_B2C_DOC = "dhl_express_worldwide_b2c_doc";

  case WORLDWIDE_B2C_NONDOC = "dhl_express_worldwide_b2c_nondoc";

  case MEDICAL_EXPRESS = "dhl_express_medical_express";

  case EXPRESS_EASY_NONDOC = "dhl_express_express_easy_nondoc";

}