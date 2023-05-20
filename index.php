<?php

ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);
error_reporting (E_ALL);


require_once("controller/template.controller.php");
require_once("controller/back-up-drives.controller.php");
require_once("controller/categories.controller.php");
require_once("controller/clients.controller.php");
require_once("controller/collect-payments.controller.php");
require_once("controller/content.controller.php");
require_once("controller/employees.controller.php");
require_once("controller/expenses.controller.php");
require_once("controller/home.controller.php");
require_once("controller/invoices.controller.php");
require_once("controller/jobs.controller.php");
require_once("controller/leads.controller.php");
require_once("controller/outsource.controller.php");
require_once("controller/parts.controller.php");
require_once("controller/pick-up-drops.controller.php");
require_once("controller/products.controller.php");
require_once("controller/purchase.controller.php");
require_once("controller/reports.controller.php");
require_once("controller/sales.controller.php");
require_once("controller/services.controller.php");
require_once("controller/tasks.controller.php");
require_once("controller/users.controller.php");

require_once("models/back-up-drives.models.php");
require_once("models/categories.models.php");
require_once("models/clients.models.php");
require_once("models/collect-payments.models.php");
require_once("models/content.models.php");
require_once("models/employees.models.php");
require_once("models/expenses.models.php");
require_once("models/home.models.php");
require_once("models/jobs.models.php");
require_once("models/leads.models.php");
require_once("models/outsource.models.php");
require_once("models/parts.models.php");
require_once("models/payments.models.php");
require_once("models/pick-up-drops.models.php");
require_once("models/products.models.php");
require_once("models/purchase.models.php");
require_once("models/quotation.models.php");
require_once("models/reports.models.php");
require_once("models/sales.models.php");
require_once("models/services.models.php");
require_once("models/tasks.models.php");
require_once("models/users.models.php");



$template = new ControllerTemplate();

$template->ctrTemplate();