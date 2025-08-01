<?php
include "./back-end/conexao.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Avaliação WEB</title>
</head>

<body>
    <div class="container">
       
    </div>
    <div class="container mt-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Básico</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#" role="tab" aria-controls="profile" aria-selected="false">Intermediário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#" role="tab" aria-controls="profile" aria-selected="false">Avançado</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#" role="tab" aria-controls="profile" aria-selected="false">Hands On</a>
            </li>
            <!-- <li class="nav-item">
            <a href="lista.php" class="btn btn-primary">Listar</a>
            </li>
            <li class="nav-item">
            <a href="cardapio.php" class="btn btn-warning">Cardapio</a>
            </li> -->
        </ul>
        <div class="tab-content" id="myTabContent">
            <!-- TAB CADASTRO FOMRULARIO MASCULINO -->
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="d-flex justify-content-center mt-3 mb-3">
                    <div class="card col-md-8 text-justify" style="width: 18rem;">
                        <div class="card-body col-md-12 bg-white text-dark">
                            <h4>Módulo Básico</h4>
                           <br> A Universidade Federal de Acre (UFAC), em parceria com a Flextronics da Amazônia
LTDA, Motorola mobility comércio de produtos eletrônicos LTDA e Fundação de apoio e
desenvolvimento ao ensino, pesquisa e extensão universitária no Acre (FUNDAPE), por meio de
convênio celebrado entre as partes, estão executando o projeto “WEB ACADEMY:
CAPACITAÇÃO EM DESENVOLVIMENTO WEB FULL-STACK”.
<br> O projeto consiste em formar recursos humanos com habilidades para conceber,
projetar, implementar e testar aplicações de software voltadas para a Internet, lançando mão de
metodologias e ferramentas modernas, capazes de atender as demandas emergentes do
mercado de desenvolvimento de software, mediante o uso de investimentos de pesquisa,
desenvolvimento e inovação derivados dos benefícios fiscais usufruídos pelas empresas

                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3 mb-3">
                    <div class="card col-md-8" style="width: 18rem;">
                        <div class="card-body bg-white text-dark">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Selecione o aluno</label>
                                    <select name="" class="form-control">
                                        <option value="">Fred Tavares</option>
                                        <option value="">Fred Tavares</option>
                                        <option value="">Fred Tavares</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Data da Avaliação</label>
                                    <input name="dataNascimento" type="date" class="form-control" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Aluno Questionador?</label>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="paiMaeTeveDoenca[]" value="Diabetes" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Pouco
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="paiMaeTeveDoenca[]" value="Hipertensão" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Médio
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="paiMaeTeveDoenca[]" value="Obesidade" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Bastante
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ao questionar já sugere solução?</label>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="paiMaeTeveDoenca[]" value="Diabetes" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Sim
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="paiMaeTeveDoenca[]" value="Hipertensão" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Reclama do tempo para as tarefas?</label>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="paiMaeTeveDoenca[]" value="Diabetes" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Sim
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="paiMaeTeveDoenca[]" value="Hipertensão" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Qualidade no produto?</label>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="paiMaeTeveDoenca[]" value="Diabetes" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Sim
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="paiMaeTeveDoenca[]" value="Hipertensão" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Muitas desculpas para diversas atividades?</label>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="paiMaeTeveDoenca[]" value="Diabetes" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Sim
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="paiMaeTeveDoenca[]" value="Hipertensão" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Em relação ao cumprimento dos prazos?</label>
                                    <div class="row">

                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="qualidadeSono" id="qualidadeSono1" value="Bom" >
                                                <label class="form-check-label" for="qualidadeSono1">
                                                    Bom
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="qualidadeSono" id="qualidadeSono2" value="Razoavel">
                                                <label class="form-check-label" for="qualidadeSono2">
                                                    Razoável
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="qualidadeSono" id="qualidadeSono2" value="Ruim">
                                                <label class="form-check-label" for="qualidadeSono2">
                                                    Ruim
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Grau de comprometimento?</label>
                                    <div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="AnsiedadeRadioInline0" name="ansiedade" value="0" class="custom-control-input">
                                            <label class="custom-control-label" for="AnsiedadeRadioInline0">0</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="AnsiedadeRadioInline1" name="ansiedade" value="1" class="custom-control-input">
                                            <label class="custom-control-label" for="AnsiedadeRadioInline1">1</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="AnsiedadeRadioInline2" name="ansiedade" value="2" class="custom-control-input">
                                            <label class="custom-control-label" for="AnsiedadeRadioInline2">2</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="AnsiedadeRadioInline3" name="ansiedade" value="3" class="custom-control-input">
                                            <label class="custom-control-label" for="AnsiedadeRadioInline3">3</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="AnsiedadeRadioInline4" name="ansiedade" value="4" class="custom-control-input">
                                            <label class="custom-control-label" for="AnsiedadeRadioInline4">4</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="AnsiedadeRadioInline5" name="ansiedade" value="5" class="custom-control-input">
                                            <label class="custom-control-label" for="AnsiedadeRadioInline5">5</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="AnsiedadeRadioInline6" name="ansiedade" value="6" class="custom-control-input">
                                            <label class="custom-control-label" for="AnsiedadeRadioInline6">6</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="AnsiedadeRadioInline7" name="ansiedade" value="7" class="custom-control-input">
                                            <label class="custom-control-label" for="AnsiedadeRadioInline7">7</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="AnsiedadeRadioInline8" name="ansiedade" value="8" class="custom-control-input">
                                            <label class="custom-control-label" for="AnsiedadeRadioInline8">8</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="AnsiedadeRadioInline9" name="ansiedade" value="9" class="custom-control-input">
                                            <label class="custom-control-label" for="AnsiedadeRadioInline9">9</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="AnsiedadeRadioInline10" name="ansiedade" value="10" class="custom-control-input">
                                            <label class="custom-control-label" for="AnsiedadeRadioInline10">10</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Liderança nativa?</label>
                                    <div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="estressRadioInline0" name="estress" value="0" class="custom-control-input">
                                            <label class="custom-control-label" for="estressRadioInline0">0</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="estressRadioInline1" name="estress" value="1" class="custom-control-input">
                                            <label class="custom-control-label" for="estressRadioInline1">1</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="estressRadioInline2" name="estress" value="2" class="custom-control-input">
                                            <label class="custom-control-label" for="estressRadioInline2">2</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="estressRadioInline3" name="estress" value="3" class="custom-control-input">
                                            <label class="custom-control-label" for="estressRadioInline3">3</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="estressRadioInline4" name="estress" value="4" class="custom-control-input">
                                            <label class="custom-control-label" for="estressRadioInline4">4</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="estressRadioInline5" name="estress" value="5" class="custom-control-input">
                                            <label class="custom-control-label" for="estressRadioInline5">5</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="estressRadioInline6" name="estress" value="6" class="custom-control-input">
                                            <label class="custom-control-label" for="estressRadioInline6">6</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="estressRadioInline7" name="estress" value="7" class="custom-control-input">
                                            <label class="custom-control-label" for="estressRadioInline7">7</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="estressRadioInline8" name="estress" value="8" class="custom-control-input">
                                            <label class="custom-control-label" for="estressRadioInline8">8</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="estressRadioInline9" name="estress" value="9" class="custom-control-input">
                                            <label class="custom-control-label" for="estressRadioInline9">9</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="estressRadioInline10" name="estress" value="10" class="custom-control-input">
                                            <label class="custom-control-label" for="estressRadioInline10">10</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ajuda sua equipe?</label>
                                    <div class="row">

                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="ansiedadeEstressComida" id="ansiedadeEstressComida1" value="sim" >
                                                <label class="form-check-label" for="ansiedadeEstressComida1">
                                                    Sim
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="ansiedadeEstressComida" id="ansiedadeEstressComida2" value="nao">
                                                <label class="form-check-label" for="ansiedadeEstressComida2">
                                                    Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sabe dos assuntos, mas trabalha sempre só?</label>
                                    <div class="row">

                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="ansiedadeEstressComida" id="ansiedadeEstressComida1" value="sim" >
                                                <label class="form-check-label" for="ansiedadeEstressComida1">
                                                    Sim
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="ansiedadeEstressComida" id="ansiedadeEstressComida2" value="nao">
                                                <label class="form-check-label" for="ansiedadeEstressComida2">
                                                    Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Conhecimento do conteúdo?</label>
                                    <div class="row">

                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="ansiedadeEstressComida" id="ansiedadeEstressComida1" value="sim" >
                                                <label class="form-check-label" for="ansiedadeEstressComida1">
                                                    Fraco
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="ansiedadeEstressComida" id="ansiedadeEstressComida2" value="nao">
                                                <label class="form-check-label" for="ansiedadeEstressComida2">
                                                    Médio
                                                </label>
                                            </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="radio" name="ansiedadeEstressComida" id="ansiedadeEstressComida2" value="nao">
                                                <label class="form-check-label" for="ansiedadeEstressComida2">
                                                    Avançado
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Observações Gerais</label>
                                    <input name="suplementoAlimentar" type="text" class="form-control" placeholder="">
                                </div>

                                <button  class="btn btn-primary">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TAB CADASTRO FORMULARIO FEMININO -->
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="d-flex justify-content-center mt-3 mb-3">
                    <div class="card col-md-8 text-justify" style="width: 18rem;">
                        <div class="card-body col-md-12 bg-white text-dark">
                            <h4>Anamnese nutricional</h4>
                            Olá,

                            <p>favor, responda as perguntas abaixo o mais COMPLETO possível. Suas respostas irão me ajudar e agilizar nosso atendimento.</p>

                            <p>As 6 últimas perguntas são sobre sua rotina alimentar, procure detalhar ao máximo como também as quantidades, por ex., 1 pão francês com manteiga, 1 xícara de café com açúcar, 2 ovos frito na manteiga, 4 colheres de sopa de arroz, 1 pedaço médio de carne grelhada, etc.</p>

                            <p>Qualquer dúvida me chame no whatsapp (68) 99205-6341.</p>


                            Um abraço
                            Gleison Paim
                            Nutricionista CRN/7-8233
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3 mb-3">
                    <div class="card col-md-8" style="width: 18rem;">
                        <div class="card-body bg-white text-dark">
                            <form action="./back-end//cadastrar.php" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Qual o seu nome completo?</label>
                                    <input name="nome" type="text" class="form-control" placeholder="">
                                    <input name="genero" value="Feminino" type="hidden">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Qual é a sua data de nascimento?</label>
                                    <input name="dataNascimento" type="date" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Qual é o objetivo com o tratamento nutricional?</label>
                                    <input name="objetivo" type="text" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Atualmente você possui alguma doença diagnosticada pelo seu médico? Qual(is)?</label>
                                    <input name="doencaDiagnosticada" type="text" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Seu pai e/ou mãe possui ou já teve algumas dessas doenças?</label>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="paiMaeTeveDoenca[]" value="Diabetes" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Diabetes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="paiMaeTeveDoenca[]" value="Hipertensão" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Hipertensão
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="paiMaeTeveDoenca[]" value="Obesidade" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Obesidade
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="paiMaeTeveDoenca[]" value="Cancêr" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Cancêr
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="paiMaeTeveDoenca[]" value="Depressão" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Depressão
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="paiMaeTeveDoenca[]" value="Esteatose hepática" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Esteatose hepática
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="paiMaeTeveDoenca[]" value="Dislipidemia" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Dislipidemia
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="paiMaeTeveDoenca[]" value="Outro" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Outro
                                                </label><span><input name="paiMaeTeveDoenca[]" class="form-control" type="text"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Está fazendo uso de algum medicamento no momento? Se sim, qual(is)? Qual é o tratamento?</label>
                                    <input name="medicamentoTratamento" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Você faz algum tipo de atividade física? Se sim, qual(is)? Quantas vezes na semana? Qual é a duração? Em que horário?</label>
                                    <input name="atividadeFisica" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Você evacua diariamente?</label>
                                    <div class="row">

                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="evacuaDiariamente" id="evacuaDiariamente1" value="sim" >
                                                <label class="form-check-label" for="evacuaDiariamente1">
                                                    Sim
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="evacuaDiariamente" id="evacuaDiariamente2" value="nao">
                                                <label class="form-check-label" for="evacuaDiariamente2">
                                                    Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Se a pergunta anterior foi "não", por quantos dias você fica sem evacuar?</label>
                                    <input name="diasSemEvacuar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Você consome bebida alcoólica? Se sim, o que você bebe? Qual é a quantidade que você consome? Com que frequência?</label>
                                    <input name="bebidaAcoolica" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Você fuma?</label>
                                    <div class="row">

                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="fuma" id="fuma1" value="sim" >
                                                <label class="form-check-label" for="fuma1">
                                                    Sim
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="fuma" id="fuma2" value="nao">
                                                <label class="form-check-label" for="fuma2">
                                                    Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quanto de água pura você consome por dia? Se for copos, especifique o ml do copo se possível.</label>
                                    <input name="agua" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Como você classifica a qualidade do seu sono?</label>
                                    <div class="row">

                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="qualidadeSono" id="qualidadeSono1" value="Bom" >
                                                <label class="form-check-label" for="qualidadeSono1">
                                                    Bom
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="qualidadeSono" id="qualidadeSono2" value="Razoavel">
                                                <label class="form-check-label" for="qualidadeSono2">
                                                    Razoável
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="qualidadeSono" id="qualidadeSono2" value="Ruim">
                                                <label class="form-check-label" for="qualidadeSono2">
                                                    Ruim
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Em uma escala de 0 a 10, que nota você dar para sua ansiedade?</label>
                                    <div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoAnsiedadeRadioInline0" name="ansiedade" value="0" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoAnsiedadeRadioInline0">0</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoAnsiedadeRadioInline1" name="ansiedade" value="1" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoAnsiedadeRadioInline1">1</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoAnsiedadeRadioInline2" name="ansiedade" value="2" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoAnsiedadeRadioInline2">2</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoAnsiedadeRadioInline3" name="ansiedade" value="3" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoAnsiedadeRadioInline3">3</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoAnsiedadeRadioInline4" name="ansiedade" value="4" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoAnsiedadeRadioInline4">4</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoAnsiedadeRadioInline5" name="ansiedade" value="5" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoAnsiedadeRadioInline5">5</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoAnsiedadeRadioInline6" name="ansiedade" value="6" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoAnsiedadeRadioInline6">6</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoAnsiedadeRadioInline7" name="ansiedade" value="7" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoAnsiedadeRadioInline7">7</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoAnsiedadeRadioInline8" name="ansiedade" value="8" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoAnsiedadeRadioInline8">8</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoAnsiedadeRadioInline9" name="ansiedade" value="9" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoAnsiedadeRadioInline9">9</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoAnsiedadeRadioInline10" name="ansiedade" value="10" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoAnsiedadeRadioInline10">10</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Em uma escala de 0 a 10, que nota você dar para seu estresse?</label>
                                    <div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoestressRadioInline0" name="estress" value="0" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoestressRadioInline0">0</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoestressRadioInline1" name="estress" value="1" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoestressRadioInline1">1</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoestressRadioInline2" name="estress" value="2" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoestressRadioInline2">2</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoestressRadioInline3" name="estress" value="3" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoestressRadioInline3">3</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoestressRadioInline4" name="estress" value="4" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoestressRadioInline4">4</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoestressRadioInline5" name="estress" value="5" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoestressRadioInline5">5</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoestressRadioInline6" name="estress" value="6" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoestressRadioInline6">6</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoestressRadioInline7" name="estress" value="7" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoestressRadioInline7">7</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoestressRadioInline8" name="estress" value="8" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoestressRadioInline8">8</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoestressRadioInline9" name="estress" value="9" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoestressRadioInline9">9</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femininoestressRadioInline10" name="estress" value="10" class="custom-control-input">
                                            <label class="custom-control-label" for="femininoestressRadioInline10">10</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Você desconta ansiedade e/ou estresse na comida?</label>
                                    <div class="row">

                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="ansiedadeEstressComida" id="ansiedadeEstressComida1" value="sim" >
                                                <label class="form-check-label" for="ansiedadeEstressComida1">
                                                    Sim
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="ansiedadeEstressComida" id="ansiedadeEstressComida2" value="nao">
                                                <label class="form-check-label" for="ansiedadeEstressComida2">
                                                    Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Você faz uso de anticoncepcional?</label>
                                    <div class="row">

                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="anticoncepcional" id="anticoncepcional1" value="sim" >
                                                <label class="form-check-label" for="anticoncepcional1">
                                                    Sim
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="anticoncepcional" id="anticoncepcional2" value="nao">
                                                <label class="form-check-label" for="anticoncepcional2">
                                                    Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Se você disse "sim" na pergunta anterior, para qual finalidade?
                                    </label>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="finalidade[]" value="Evitar Gravidez" id="finalidade1">
                                                <label class="form-check-label" for="finalidade1">
                                                    Evitar Gravidez
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="finalidade[]" value="Tratamento medico" id="finalidade2">
                                                <label class="form-check-label" for="finalidade2">
                                                    Tratamento médico
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="finalidade[]" value=" Outro" id="finalidade3">
                                                <label class="form-check-label" for="finalidade3">
                                                    Outro
                                                </label><span><input name="finalidade[]" class="form-control" type="text"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Na TPM, quais desses sintomas você sente?</label>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tpmSintomas[]" value="Dor de cabeça" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Dor de cabeça
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tpmSintomas[]" value="Cólicas" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Cólicas
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tpmSintomas[]" value="Enjoo" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Enjoo
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tpmSintomas[]" value="Inchaço" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Inchaço
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tpmSintomas[]" value="Irritação" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Irritação
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tpmSintomas[]" value="Outro" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Outro
                                                </label><span><input name="tpmSintomas[]" class="form-control" type="text"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Na TPM, você sente desejo por doce além do normal?
                                    </label>
                                    <div class="row">

                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tpmDoce" id="tpmDoce1" value="sim" >
                                                <label class="form-check-label" for="tpmDoce1">
                                                    Sim
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tpmDoce" id="tpmDoce2" value="nao">
                                                <label class="form-check-label" for="tpmDoce2">
                                                    Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Como você define seu fluxo sanguíneo?
                                    </label>
                                    <div class="row">

                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="fluxoSangue[]" id="fluxoSangue1" value="Intenso" >
                                                <label class="form-check-label" for="fluxoSangue1">
                                                    Intenso
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="fluxoSangue[]" id="fluxoSangue2" value="Regular">
                                                <label class="form-check-label" for="fluxoSangue2">
                                                    Regular
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="fluxoSangue[]" id="fluxoSangue3" value="Outro">
                                                <label class="form-check-label" for="fluxoSangue3">
                                                    Outro
                                                </label><span><input name="fluxoSangue[]" class="form-control" type="text"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Você apresenta alguma aversão ou intolerância alimentar? Se sim, qual(is)?</label>
                                    <input name="intoleraciaAlimentar" type="text" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quais são suas preferências alimentares?</label>
                                    <input name="preferenciasAlimentares" type="text" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Está tomando algum suplemento alimentar? Se sim, qual(is)?</label>
                                    <input name="suplementoAlimentar" type="text" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Marque as refeições que você faz no seu dia a dia.
                                    </label>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="refeicoesDiarias[]" value="Café da manhã" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Café da manhã
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="refeicoesDiarias[]" value="Lanche da manhã" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Lanche da manhã
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="refeicoesDiarias[]" value="Almoço" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Almoço
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="refeicoesDiarias[]" value="Lanche da tarde" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Lanche da tarde
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="refeicoesDiarias[]" value="Jantar" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Jantar
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="refeicoesDiarias[]" value="Ceia" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Ceia
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="refeicoesDiarias[]" value="Outro" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Outro
                                                </label><span><input name="refeicoesDiarias[]" class="form-control" type="text"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quais alimentos você tem o hábito de consumir no café da manhã?</label>
                                    <input name="alimentosCafe" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quais alimentos você tem o hábito de consumir no lanche da manhã?</label>
                                    <input name="alimentosLancheManha" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quais alimentos você tem o hábito de consumir no almoço?</label>
                                    <input name="alimentosAlmoco" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quais alimentos você tem o hábito de consumir no lanche da tarde?</label>
                                    <input name="alimentosLancheTarde" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quais alimentos você tem o hábito de consumir no jantar?</label>
                                    <input name="alimentosJantar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Acrescente outras observações se necessário sobre sua rotina alimentar.</label>
                                    <input name="outrasObservacoes" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>