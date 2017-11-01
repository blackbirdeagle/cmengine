<img class = "img-responsive img-thumbnail" width = "300" src = "<?=$portfolioGet["image"]?>" alt = ""/>
<?php
$updatePortfolioForm = new CFormBuilder();

$updatePortfolioForm->FormStart("POST", "", true);
$updatePortfolioForm->input("text", "inputName", "form-control", "form-group", "PORTFOLIO_NAME", "Название работы", $portfolioGet["name"], true, true);
$updatePortfolioForm->input("file", "inputImage", "form-control", "form-group", "PORTFOLIO_IMAGE", "Сменить изображение", "", true, false);
$updatePortfolioForm->hidden("PORTFOLIO_ID", $portfolioGet["id"]);
$updatePortfolioForm->checkbox($portfolioGet["block"], 'PORTFOLIO_BLOCK', 'checkbox', 'Блокировка');
$updatePortfolioForm->button("submit", "btn btn-primary", "PORTFOLIO_UPDATE", "Изменить");
$updatePortfolioForm->FormFinish();
?>