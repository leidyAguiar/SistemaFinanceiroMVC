<?php

namespace App\Lib;

class Sessao
{
    public static function gravaLogin($uso_id, $uso_nome){
        $_SESSION['loggedin'] = true;
        $_SESSION['uso_id'] = $uso_id;
        $_SESSION['uso_nome'] = $uso_nome;
    }
    public static function gravaMensagem($mensagem){
        $_SESSION['mensagem'] = $mensagem;
    }

    public static function limpaMensagem(){
        unset($_SESSION['mensagem']);
    }

    public static function retornaMensagem(){
        return (isset($_SESSION['mensagem'])) ? $_SESSION['mensagem'] : "";
    }

    public static function gravaFormulario($form){
        $_SESSION['form'] = $form;
    }

    public static function limpaFormulario(){
        unset($_SESSION['form']);
    }

    public static function retornaValorFormulario($key){
        return (isset($_SESSION['form'][$key])) ? $_SESSION['form'][$key] : "";
    }

    public static function existeFormulario(){
        return (isset($_SESSION['form'])) ? $_SESSION['form'] : "";
    }

    public static function gravaErro($erros){
        $_SESSION['erro'] = $erros;
    }

    public static function retornaErro(){
       return (isset($_SESSION['erro'])) ? $_SESSION['erro'] : false;
    }

    public static function limpaErro(){
        unset($_SESSION['erro']);
    }

    public static function gravarTipoUsuario($tipo_usuario){
        $_SESSION['tipo_usuario'] = $tipo_usuario;
    }
    
    public static function retornaTipoUsuario(){
        return (isset($_SESSION['tipo_usuario'])) ? $_SESSION['tipo_usuario'] : "";
    }

    public static function retornaUsuarioId(){
        return (isset($_SESSION['uso_id'])) ? $_SESSION['uso_id'] : "";
    }

}