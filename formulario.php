<?php
    if(isset($_POST['submit'])){
       // print_r('Nome: '. $_POST['nome']); 
       // print_r('<br>');
       // print_r('Email: '. $_POST['email']);
       // print_r('<br>');
       // print_r('Telefone: '. $_POST['telefone']);
       // print_r('<br>');
       // print_r('Sexo: '. $_POST['genero']);
       // print_r('<br>');
       // print_r('Data de nascimento:'. $_POST['data_nascimento']);
       // print_r('<br>');
       // print_r('Cidade: '. $_POST['cidade']);
       // print_r('<br>');
       // print_r('Estado: '. $_POST['estado']);
       // print_r('<br>');
        //print_r('Endereço'. $_POST['endereco']);
        //print_r('<br>');

        include_once('config.php');
        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $telefone=$_POST['telefone'];
        $sexo=$_POST['genero'];
        $data_nasc=$_POST['data_nascimento'];
        $cidade=$_POST['cidade'];
        $estado=$_POST['estado'];
        $endereco=$_POST['endereco'];

        $result = mysqli_query($conexao,"INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");





    }

?>

<style>
    body{

font-family: Arial, Helvetica, sans-serif;
background-image: linear-gradient(to right,  rgb(30, 180, 220), rgb(21, 77, 87))
}

.Box{

position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
background-color: rgba(0, 0, 0, 0.6);
padding: 15px;
border-radius: 15px;
width: 20x;
color: white;

}
fieldset{
border: 3px solid rgb(30, 180, 220);
}
legend{
border: 2px solid rgb(38, 139, 170);
padding: 10px;
text-align: center;
background-color: rgb(38, 139, 170);
border-radius: 9px;
}
.inputBox{
position: relative;
}
.inputUser{
background: none;
border: none;
border-bottom: 1px solid white;
outline: none;
font-size: 15px;
width: 100%;
letter-spacing: 2px;
}

.LabelInput{
position: absolute;
top:0px;
left: 0px;
pointer-events: none;
transition: .5s;
}

.inputUser:focus ~ .LabelInput,
.inputUser:valid ~ .LabelInput{
top: -20px;
font-size: 12px;
color: rgb(30, 180, 220);
}

#data_nascimento{
border: none;
padding: 8px;
border-radius: 10px;
outline: none;

}

#submit{
background-image: linear-gradient(to right,  rgb(20, 114, 131), rgb(30, 126, 170));
width: 100%;
border: none;
padding: 15px;
color: white;
cursor: pointer;
font-size: 15px;
border-radius: 10px;
}

#submit:hover{
background-image: linear-gradient(to right,  rgb(20, 114, 121), rgb(23, 104, 151));

}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="formato_formuario.css">
</head>
</head>
<body>
    <div class="Box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="Nome" class="LabelInput"> Nome Completo</label>
                </div>
                <br> <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="LabelInput"> Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="LabelInput"> Telefone</label>
                </div>
                <p>Sexo</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino"> Feminino</label> 
                
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino"> Masculino</label> 
                
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro"> Outro</label> 
                <br><br>
                <div class="inputBox">
                    <label for="data_nascimento"> <b>Data de Nascimento</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required/>
                </div>   
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="LabelInput"> Cidade</label>
                </div> 
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="LabelInput"> Estado</label>
                </div>  
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="LabelInput"> Endereço</label>
                </div>  
                <br>   
                <input type="submit" name="submit" id="submit">
            </fieldset>
            
        </form>
    </div>
</body>
</html>