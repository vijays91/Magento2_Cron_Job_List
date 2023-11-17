<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

use Magento\Framework\App\Bootstrap;

$fulldir = dirname(dirname(__FILE__));
require $fulldir . '/app/bootstrap.php';
$bootstrap     = Bootstrap::create(BP, $_SERVER);
$objectManager = $bootstrap->getObjectManager();
$state         = $objectManager->get(Magento\Framework\App\State::class)
				->setAreaCode(\Magento\Framework\App\Area::AREA_FRONTEND);

echo "Cron-List <br />";

$test = $objectManager->get(\Magento\Cron\Model\ConfigInterface::class);
$jobs = $test->getJobs();
echo "<pre>";
print_r( $jobs );