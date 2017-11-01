<?php
$addPortfolioForm = new CFormBuilder();

$addPortfolioForm->FormStart("POST", "", true);
$addPortfolioForm->input("text", "inputName", "form-control", "form-group", "PORTFOLIO_NAME", "Название работы", "", true, true);
$addPortfolioForm->input("file", "inputImage", "form-control", "form-group", "PORTFOLIO_IMAGE", "Изображение работы", "", true, true);
$addPortfolioForm->button("submit", "btn btn-primary", "PORTFOLIO_ADD", "Добавить");
$addPortfolioForm->FormFinish();
?>