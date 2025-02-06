# 📚 Simple CRUD Application with HTML, CSS, and PHP

Welcome to my simple CRUD (Create, Read, Update, Delete) application built using **HTML**, **CSS**, and **PHP**. This project demonstrates basic database operations for managing a collection of books. It's a great starting point for anyone learning web development with PHP and MySQL.

---

## 🚀 Features
- **Create**: Add new books to the database.
- **Read**: Display a list of all books in the database.
- **Update**: Edit existing book details.
- **Delete**: Remove books from the database.

---

## 🛠️ Prerequisites
To run this project locally, you'll need:
- **XAMPP** (or any local server environment like WAMP or MAMP).
- A web browser (e.g., Chrome, Firefox).

---

## 🖥️ Installation and Setup

1. **Install XAMPP**:
   - Download and install [XAMPP](https://www.apachefriends.org/index.html) if you don't already have it.
   - Start the **Apache** and **MySQL** services from the XAMPP Control Panel.

2. **Set Up the Database**:
   - Open your browser and go to `http://localhost/phpmyadmin`.
   - Create a new database named **`crud`**.
   - Inside the `crud` database, create a table named **`books`** with the following structure:

     ```sql
     CREATE TABLE books (
         id INT(11) AUTO_INCREMENT PRIMARY KEY,
         title VARCHAR(255) NOT NULL,
         author VARCHAR(255) NOT NULL,
         description TEXT NOT NULL
     );
     ```

3. **Clone or Download the Project**:
   - Clone this repository or download the project files.
   - Place the project folder inside the `htdocs` directory of your XAMPP installation (e.g., `C:\xampp\htdocs\crud-project`).

4. **Run the Application**:
   - Open your browser and navigate to `http://localhost/crud-project` (replace `crud-project` with the name of your project folder).
   - You should see the CRUD interface ready to use!

---

## 📂 Project Structure
- **`index.php`**: The main file that displays the list of books and handles the CRUD operations.
- **`create.php`**: Handles adding new books to the database.
- **`update.php`**: Handles editing existing book details.
- **`delete.php`**: Handles deleting books from the database.
- **`style.css`**: Contains the styling for the application.

---

## 🧑‍💻 How to Use
1. **Add a Book**:
   - Click the "Add New Book" button.
   - Fill in the title, author, and description, then click "Save".

2. **Edit a Book**:
   - Click the "Edit" button next to the book you want to update.
   - Modify the details and click "Update".

3. **Delete a Book**:
   - Click the "Delete" button next to the book you want to remove.
   - Confirm the deletion.

---

## 🛠️ Technologies Used
- **HTML**: For structuring the web pages.
- **CSS**: For styling the application.
- **PHP**: For server-side logic and database interactions.
- **MySQL**: For storing and managing book data.

---

## 🤝 Contributing
Feel free to contribute to this project! If you have any suggestions, improvements, or bug fixes, please open an issue or submit a pull request.

---

## 📄 License
This project is open-source and available under the [MIT License](LICENSE).

---

Happy coding! 🚀
