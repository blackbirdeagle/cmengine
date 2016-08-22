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