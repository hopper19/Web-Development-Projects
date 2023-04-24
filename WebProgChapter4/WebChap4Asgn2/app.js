var books = [	{		title: "To Kill a Mockingbird",		author: "Harper Lee",		genre: "Fiction",		price: 10.99,		stock: 15	},	{		title: "1984",		author: "George Orwell",		genre: "Fiction",		price: 12.99,		stock: 10	},	{		title: "The Great Gatsby",		author: "F. Scott Fitzgerald",		genre: "Fiction",		price: 9.99,		stock: 20	},	{		title: "Pride and Prejudice",		author: "Jane Austen",		genre: "Fiction",		price: 8.99,		stock: 12	},	{		title: "The Hobbit",		author: "J.R.R. Tolkien",		genre: "Fantasy",		price: 14.99,		stock: 18	}];

function displayBooks() {
	var bookTable = document.getElementById("book-table");

	books.forEach(function(book) {
		var row = bookTable.insertRow(-1);

		var titleCell = row.insertCell(0);
		var authorCell = row.insertCell(1);
		var genreCell = row.insertCell(2);
		var priceCell = row.insertCell(3);
		var stockCell = row.insertCell(4);

		titleCell.innerHTML = book.title;
		authorCell.innerHTML = book.author;
		genreCell.innerHTML = book.genre;
		priceCell.innerHTML = book.price.toFixed(2);
		stockCell.innerHTML = book.stock;
	});
}

displayBooks();
