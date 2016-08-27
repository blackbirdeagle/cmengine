function deleteUser(id){
	if(confirm("Вы действительно хотите удалить пользователя?")){
		$.post("/admin/users/delete.php", {ID: id}, function(data){
			if(data == "1"){
				alert("Пользователь успешно удален!");
			}else if(data == "0"){
				alert("При удалении пользователя возникла ошибка!");
			}
			document.location.href = document.location.href;
		});
	}
}

function deletePage(id){
	if(confirm("Вы действительно хотите удалить страницу?")){
		$.post("/admin/staticpage/delete.php", {ID: id}, function(data){
			if(data == "1"){
				alert("Страница успешно удалена!");
			}else if(data == "0"){
				alert("При удалении страницы возникла ошибка!");
			}
			document.location.href = document.location.href;
		});
	}	
}

function deleteService(id){
	if(confirm("Вы действительно хотите удалить услугу?")){
		$.post("/admin/services/delete.php", {ID: id}, function(data){
			if(data == "1"){
				alert("Услуга успешно удалена!");
			}else if(data == "0"){
				alert("При удалении услуги возникла ошибка!");
			}
			document.location.href = document.location.href;
		});
	}	
}

function deleteFaq(id){
	if(confirm("Вы действительно хотите удалить вопрос?")){
		$.post("/admin/faq/delete.php", {ID: id}, function(data){
			if(data == "1"){
				alert("Вопрос успешно удален!");
			}else if(data == "0"){
				alert("При удалении вопроса возникла ошибка!");
			}
			document.location.href = document.location.href;
		});
	}	
}

function deleteCitata(id){
	if(confirm("Вы действительно хотите удалить цитату?")){
		$.post("/admin/citats/delete.php", {ID: id}, function(data){
			if(data == "1"){
				alert("Цитата успешно удалена!");
			}else if(data == "0"){
				alert("При удалении цитаты возникла ошибка!");
			}
			document.location.href = document.location.href;
		});
	}	
}

function deleteReview(id){
	if(confirm("Вы действительно хотите удалить отзыв?")){
		$.post("/admin/reviews/delete.php", {ID: id}, function(data){
			if(data == "1"){
				alert("Отзыв успешно удален!");
			}else if(data == "0"){
				alert("При удалении отзыва возникла ошибка!");
			}
			document.location.href = document.location.href;
		});
	}	
}

function deletePortfolio(id){
	if(confirm("Вы действительно хотите удалить работу из портфолио?")){
		$.post("/admin/portfolio/delete.php", {ID: id}, function(data){
			if(data == "1"){
				alert("Работа успешно удалена!");
			}else if(data == "0"){
				alert("При удалении работы возникла ошибка!");
			}
			document.location.href = document.location.href;
		});
	}	
}