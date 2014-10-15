<?php
$root = $container['kernel']['root'];

return array_map('realpath', [
	$root.'/vendor/asgard/asgard/Common/Bag.php',
	$root.'/vendor/asgard/asgard/Cache/CacheInterface.php',
	$root.'/vendor/asgard/asgard/Cache/NullCache.php',
	$root.'/vendor/asgard/asgard/Container/Container.php',
	$root.'/vendor/asgard/asgard/Core/BundleLoader.php',
	$root.'/vendor/asgard/asgard/Config/Config.php',
	$root.'/vendor/asgard/asgard/Debug/ErrorHandler.php',
	$root.'/vendor/asgard/asgard/Db/DAL.php',
	$root.'/vendor/asgard/asgard/Db/DB.php',
	$root.'/vendor/asgard/asgard/Db/Query.php',
	$root.'/vendor/asgard/asgard/Entity/Behavior.php',
	$root.'/vendor/asgard/asgard/Entity/EntityManager.php',
	$root.'/vendor/asgard/asgard/Entity/Entity.php',
	$root.'/vendor/asgard/asgard/Entity/Definition.php',
	$root.'/vendor/asgard/asgard/Entity/EntityExceptionInterface.php',
	$root.'/vendor/asgard/asgard/Entity/Properties/DatetimeProperty.php',
	$root.'/vendor/asgard/asgard/Entity/Properties/IntegerProperty.php',
	$root.'/vendor/asgard/asgard/Entity/Properties/TextProperty.php',
	$root.'/vendor/asgard/asgard/Entity/Property.php',
	$root.'/vendor/asgard/asgard/Form/Group.php',
	$root.'/vendor/asgard/asgard/Form/Field.php',
	$root.'/vendor/asgard/asgard/Form/Fields/TextField.php',
	$root.'/vendor/asgard/asgard/Form/Form.php',
	$root.'/vendor/asgard/asgard/Form/HTMLHelper.php',
	$root.'/vendor/asgard/asgard/Form/Widget.php',
	$root.'/vendor/asgard/asgard/Form/Widgets/TextWidget.php',
	$root.'/vendor/asgard/asgard/Hook/HookableTrait.php',
	$root.'/vendor/asgard/asgard/Hook/Chain.php',
	$root.'/vendor/asgard/asgard/Hook/HookContainer.php',
	$root.'/vendor/asgard/asgard/Hook/HookManager.php',
	$root.'/vendor/asgard/asgard/Http/Controller.php',
	$root.'/vendor/asgard/asgard/Http/ControllerRoute.php',
	$root.'/vendor/asgard/asgard/Http/CookieManager.php',
	$root.'/vendor/asgard/asgard/Http/Filter.php',
	$root.'/vendor/asgard/asgard/Http/Filters/JSONEntities.php',
	$root.'/vendor/asgard/asgard/Http/Filters/PageLayout.php',
	$root.'/vendor/asgard/asgard/Http/HttpKernel.php',
	$root.'/vendor/asgard/asgard/Http/Request.php',
	$root.'/vendor/asgard/asgard/Http/Resolver.php',
	$root.'/vendor/asgard/asgard/Http/Response.php',
	$root.'/vendor/asgard/asgard/Http/Route.php',
	$root.'/vendor/asgard/asgard/Http/SessionManager.php',
	$root.'/vendor/asgard/asgard/Http/URL.php',
	$root.'/vendor/asgard/asgard/Http/TemplateInterface.php',
	$root.'/vendor/asgard/asgard/Http/PHPTemplate.php',
	$root.'/vendor/asgard/asgard/Orm/DataMapper.php',
	$root.'/vendor/asgard/asgard/Orm/ORM.php',
	$root.'/vendor/asgard/asgard/Orm/ORMBehavior.php',
	$root.'/vendor/asgard/asgard/Common/Flash.php',
	$root.'/vendor/asgard/asgard/Common/HTML.php',
	$root.'/vendor/asgard/asgard/Common/NamespaceCommon.php',
	$root.'/vendor/asgard/asgard/Common/Paginator.php',
	$root.'/vendor/asgard/asgard/Common/Tools.php',
	$root.'/vendor/asgard/asgard/Validation/RulesRegistry.php',
	$root.'/vendor/asgard/behaviors/SortableBehavior.php',
	$root.'/vendor/asgard/behaviors/TimestampsBehavior.php',
	$root.'/vendor/asgard/data/Data.php',
	$root.'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php',
	$root.'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/DocLexer.php',
	$root.'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/DocParser.php',
	$root.'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php',
	$root.'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/SimpleAnnotationReader.php',
	$root.'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php',
	$root.'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ApcCache.php',
	$root.'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php',
	$root.'/vendor/doctrine/lexer/lib/Doctrine/Common/Lexer/AbstractLexer.php',
	$root.'/vendor/jeremeamia/SuperClosure/src/Jeremeamia/SuperClosure/SerializableClosure.php',
	$root.'/vendor/nesbot/carbon/src/Carbon/Carbon.php',
	$root.'/vendor/symfony/config/Symfony/Component/Config/Resource/FileResource.php',
	$root.'/vendor/symfony/config/Symfony/Component/Config/Resource/ResourceInterface.php',
	$root.'/vendor/symfony/translation/Symfony/Component/Translation/Loader/ArrayLoader.php',
	$root.'/vendor/symfony/translation/Symfony/Component/Translation/Loader/LoaderInterface.php',
	$root.'/vendor/symfony/translation/Symfony/Component/Translation/Loader/YamlFileLoader.php',
	$root.'/vendor/symfony/translation/Symfony/Component/Translation/MessageCatalogue.php',
	$root.'/vendor/symfony/translation/Symfony/Component/Translation/MessageCatalogueInterface.php',
	$root.'/vendor/symfony/translation/Symfony/Component/Translation/MessageSelector.php',
	$root.'/vendor/symfony/translation/Symfony/Component/Translation/MetadataAwareInterface.php',
	$root.'/vendor/symfony/translation/Symfony/Component/Translation/Translator.php',
	$root.'/vendor/symfony/translation/Symfony/Component/Translation/TranslatorInterface.php',
	$root.'/vendor/symfony/yaml/Symfony/Component/Yaml/Inline.php',
	$root.'/vendor/symfony/yaml/Symfony/Component/Yaml/Parser.php',
	$root.'/vendor/symfony/yaml/Symfony/Component/Yaml/Unescaper.php',
]);