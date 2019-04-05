<?php

return [

    /*
    |------------------------------------------------------------------------
    |   Datos cliente
    |------------------------------------------------------------------------
    */

    'cuit'          =>  '20371763644',

    'punto_venta'   =>  '0001',

    'concepto'      =>  '1',#1:productos,2:servicios,#3:productos y servicios

    /*
    |------------------------------------------------------------------------
    |   Credenciales cliente
    |------------------------------------------------------------------------
    */

    'cert'          =>  'tallermedina.crt',

    'key'           =>  'tallermedina.key',

    'PASSPHRASE'    =>  "xxxxx",

    /*
    |------------------------------------------------------------------------
    |   URLS AFIP
    |------------------------------------------------------------------------
    */
    
    'homo' => true,


    #########################################################################
    #URLS HOMOLOGACION
    #########################################################################

    'URL_WSAA_HOMO'     =>  "https://wsaahomo.afip.gov.ar/ws/services/LoginCms?wsdl",

    'WSDL_WSAA_HOMO'    =>"https://wsaahomo.afip.gov.ar/ws/services/LoginCms?wsdl",

    #COMP_ULTIMO
    'URL_ULT_HOMO'      =>  "https://wswhomo.afip.gov.ar/wsfev1/service.asmx?op=FECompUltimoAutorizado",
    'WSDL_ULT_HOMO'     =>  "https://wswhomo.afip.gov.ar/wsfev1/service.asmx?WSDL",


    #CAE SOLICITAR
    'URL_CAE_HOMO'      =>  "https://wswhomo.afip.gov.ar/wsfev1/service.asmx?op=FECAESolicitar",
    'WSDL_CAE_HOMO'     =>  "https://wswhomo.afip.gov.ar/wsfev1/service.asmx?WSDL",
    
    #TIPO IVA
    'URL_TIPO_IVA_HOMO'      =>  "https://wswhomo.afip.gov.ar/wsfev1/service.asmx?op=FEParamGetTiposIva",
    
    #GET PERSONA
    'URL_PERSONA_HOMO'   =>"https://awshomo.afip.gov.ar/sr-padron/webservices/personaServiceA5",
    'WSDL_PERSONA_HOMO'   =>"https://awshomo.afip.gov.ar/sr-padron/webservices/personaServiceA5?WSDL",


    ############################################################################
    #URLS PRODUCCION
    ############################################################################

    #WSAA
    'URL_WSAA'      =>  "https://wsaa.afip.gov.ar/ws/services/LoginCms?wsdl",
    'WSDL_WSAA'     =>  "https://wsaa.afip.gov.ar/ws/services/LoginCms?wsdl",

    #COMP_ULTIMO
    'URL_ULT'       =>  "https://servicios1.afip.gov.ar/wsfev1/service.asmx?op=FECompUltimoAutorizado",
    'WSDL_ULT'      =>  "https://servicios1.afip.gov.ar/wsfev1/service.asmx?WSDL",

    #COMP_CONSULT
    'URL_COMP'       =>  "https://servicios1.afip.gov.ar/wsfev1/service.asmx?op=FECompConsultar",
    'WSDL_COMP'      =>  "https://servicios1.afip.gov.ar/wsfev1/service.asmx?WSDL",
    
    #CAE SOLICITAR
    'URL_CAE'       =>  "https://servicios1.afip.gov.ar/wsfev1/service.asmx?op=FECAESolicitar",
    'WSDL_CAE'      =>  "https://servicios1.afip.gov.ar/wsfev1/service.asmx?WSDL",
    
    #TIPO IVA
    'URL_TIPO_IVA'  =>  "https://servicios1.afip.gov.ar/wsfev1/service.asmx?op=FEParamGetTiposIva",
    
    #GET PERSONA
    'URL_PERSONA'   =>"https://aws.afip.gov.ar/sr-padron/webservices/personaServiceA5",
    'WSDL_PERSONA'   =>"https://aws.afip.gov.ar/sr-padron/webservices/personaServiceA5?WSDL",
];
