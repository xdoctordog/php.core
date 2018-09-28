<?php

//phpinfo();
//exit;

spl_autoload_register(function(){
    require_once 'inheritance/BaseClass.php';
    require_once 'inheritance/SimpleClass.php';
    require_once 'inheritance/BaseInterface.php';
    require_once 'inheritance/SimpleImplemented.php';
    require_once 'inheritance/BaseTrait.php';
    require_once 'inheritance/BaseTraited.php';

//    require 'inheritance/BaseClass.php';
//    require 'inheritance/SimpleClass.php';
//    require 'inheritance/BaseInterface.php';
//    require 'inheritance/SimpleImplemented.php';
//    require 'inheritance/BaseTrait.php';
//    require 'inheritance/BaseTraited.php';
});

if (false) {
  require 'simplexml/SimpleXml.php';
  require 'domDocumentXml/domDocumentXml.php';
  require 'trait_and_interface_var_redefinition_in_class/redefinition_of_var.php';
  require 'is_nan_is_infinite.php';
  require 'closure/closure.php';
  require 'error_handler.php';
  require 'rawcookies.php';
  require 'complex_objects_in_session.php';
  require 'email_sending/email_send.php';
  require 'email_sending/email_send_b.php';
  require 'email_sending/email_send_c.php';
  require 'php_errors/php_errors.php';
  require 'iterable/iterable.php';
  require 'iterable/generator.php';
  require 'closure/closure_function_arguments.php';
  require 'isset/multipleArguments.php';
  require 'namespace/namespace.php';
  require 'iterable/iterables.php';
  require 'iterable/iterablesB.php';
  require 'domDocumentXml/simple_xml_load_string.php';
  require 'domDocumentXml/getXmlDomDocument.php';
  require 'array_iterator/array_iterator.php';
  require 'domDocumentXml/parse_with_SimpleXML.php';
  require 'domDocumentXml/parse_with_DOMDocument.php';
  require 'file_upload/form.php';
  require 'passwords/password_hash.php';
  require 'inheritance/main.php';
  require 'constants/constants.php';
}

  require 'inheritanceB/inheritanceB.php';
