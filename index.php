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

require_once("model/back-up-drives.models.php");
require_once("model/categories.models.php");
require_once("model/clients.models.php");
require_once("model/collect-payments.models.php");
require_once("model/content.models.php");
require_once("model/employees.models.php");
require_once("model/expenses.models.php");
require_once("model/home.models.php");
require_once("model/jobs.models.php");
require_once("model/leads.models.php");
require_once("model/outsource.models.php");
require_once("model/parts.models.php");
require_once("model/payments.models.php");
require_once("model/pick-up-drops.models.php");
require_once("model/products.models.php");
require_once("model/purchase.models.php");
require_once("model/quotation.models.php");
require_once("model/reports.models.php");
require_once("model/sales.models.php");
require_once("model/services.models.php");
require_once("model/tasks.models.php");
require_once("model/users.models.php");



$template = new ControllerTemplate();

$template->ctrTemplate();