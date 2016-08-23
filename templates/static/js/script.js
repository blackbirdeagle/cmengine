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