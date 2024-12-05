<?php

namespace Rachaelhogan\DatabaseExample;

use mysqli;

class User {
    private mysqli $conn;

    // Constructor to initialize database connection
    public function __construct($servername, $username, $password, $dbname) {
        $this->conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Method to add a user
    public function addUser($firstname, $lastname, $email) {
        $stmt = $this->conn->prepare("INSERT INTO Users (firstname, lastname, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $firstname, $lastname, $email);

        // Execute and check if insertion was successful
        if ($stmt->execute()) {
            echo "New user added successfully<br>";
        } else {
            echo "Error adding user: " . $stmt->error . "<br>";
        }

        // Close the statement
        $stmt->close();
    }

    // Method to get all users
    public function getUsers() {
        $sql = "SELECT id, firstname, lastname, email, reg_date FROM Users";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - Email: " . $row["email"]. " - Registered: " . $row["reg_date"]. "<br>";
            }
        } else {
            echo "0 results<br>";
        }
    }

    // Destructor to close the connection
    public function __destruct() {
        $this->conn->close();
    }
}

