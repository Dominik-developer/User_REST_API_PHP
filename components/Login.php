<!DOCTYPE html> <!-- LOGIN component -->


<!--<a href="./auth/index.php?action=login">LOG</a>-->

    <h2>Login</h2>
    <form action="./auth/index.php?action=login" method="POST">
        <div class="mb-3">
            <label for="text" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <style>
        /* Stylowanie dla całej strony, ustawiamy wysokość 100% */
html, body {
    height: 100%;
    margin: 0;
    font-family: Arial, sans-serif;
}

/* Stylowanie całego <main>, aby zajmował pełną wysokość strony i był wyśrodkowany */
main {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Nagłówek formularza */
main h2 {
    font-size: 2rem;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

/* Formularz */
form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    width: 100%;
    max-width: 400px;  /* Ograniczamy szerokość formularza */
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}

/* Stylowanie etykiet */
.form-label {
    font-weight: bold;
    color: #333;
}

/* Stylowanie pól formularza */
.form-control {
    border-radius: 4px;
    border: 1px solid #ccc;
    padding: 10px;
    font-size: 1rem;
    width: 100%;
    margin-bottom: 15px;
}

/* Stylowanie przycisku */
.btn-primary {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 1rem;
    border-radius: 4px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}

/* Responsywność dla mniejszych ekranów */
@media (max-width: 768px) {
    .form-control {
        font-size: 0.9rem;
    }

    .btn-primary {
        font-size: 0.9rem;
        padding: 8px 16px;
    }
}

    </style>
