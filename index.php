<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");

dd(\Bitrix\Main\Config\Configuration::getValue('exception_handling'));


?><p>
Это изменение добавленное уже на локальной машине в ветке main
</p><p>
<h1 style="color: red;">ССылка на репозиторий <a href="https://github.com/naysy-sx/kss-server/tree/main">kss-server</a></h1>
<hr>

<h2>Проверка деплоя</h2>
<p>Вторая проверка</p>
<p>Третья проверка 4</p>
<p>ghjdth</p>
<p>ещё раз</p>
<p>ещё раз</p>

<hr>

<hr>
<div></div>

<h3>И снова здравствуйте</h3>
<?$APPLICATION->IncludeComponent("bitrix:furniture.catalog.index", "", array(
	"IBLOCK_TYPE" => "products",
	"IBLOCK_ID" => "2",
	"IBLOCK_BINDING" => "section",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "N"
	),
	false
);?>
<h3>Наши услуги</h3>
<?$APPLICATION->IncludeComponent("bitrix:furniture.catalog.index", "", array(
	"IBLOCK_TYPE" => "products",
	"IBLOCK_ID" => "3",
	"IBLOCK_BINDING" => "element",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "N"
	),
	false
);?>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>