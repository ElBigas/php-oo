<?php

//possui dois destinos, CATCH (erro) e FINALLY
try {

    //lógica onde possivelmente pode acontecer o erro
    echo '<h3>*** TRY ***</h3>';

    //ERRO PROPOSITAL
    trigger_error("Cannot divide by zero", 1);

    if (!file_exists('manu.php')) {

        throw new Exception('Arquivo não existe'); //excption geralmente é utilizado pelos programadores, error é das funções nativas
        //throw new Error('Arquivo não existe');
    }

} catch (Error $e) {

    echo '<h3>*** CATCH ERROR ***</h3>';
    echo "<p style='color: red'> $e </p>";
    //importante para analisar os erros e armazenar em um banco de dados

} catch (Exception $e) {

    echo '<h3>*** CATCH EXCEPTION ***</h3>';
    echo "<p style='color: red'> $e </p>";

} finally { //opcional, mas o try deve acabar com o catch ou finally

    echo '<h3>*** FINALLY ***</h3>';
}
