// ООП JavaScript
function Lib(book){
	this.book=book;
}
// Book функция конструктор,b-экземпляр объекта
var b = new Lib("Война и мир");
// hist метод экземпляра объекта
Lib.prototype.hist=function(){
	console.log("Book,"+this.book);
}

function Author(name){
	this.name=name;
}

var n = new Author("Толстой");
// hist метод экземпляра объекта
Author.prototype.auth=function(){
	console.log("Book,"+this.name);
}

b.hist();
n.auth();

