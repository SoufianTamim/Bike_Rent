<style>
    /*  import google fonts */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

    * {
        margin: 0;
        padding: 0;
        border: none;
        outline: none;
        text-decoration: none;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        background: rgb(219, 219, 219);
    }

    .red-err {
        display: block;
        margin: 0 auto;
        color: red;
    }

    table th {
        text-transform: uppercase;
    }

    .all {
        width: 80%;
        margin-right: 3rem;
    }

    .header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 60px;
        padding: 20px;
        background: #fff;
    }

    .logo {
        display: flex;
        align-items: center;
    }

    .logo a {
        color: #000;
        font-size: 18px;
        font-weight: 600;
        margin: 2rem 8rem 2rem 2rem;
    }

    .search_box {
        display: flex;
        align-items: center;
    }

    .search_box input {
        padding: 9px;
        width: 300px;
        background: rgb(228, 228, 228);
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .search_box i {
        padding: 0.66rem;
        cursor: pointer;
        color: #fff;
        background: #000;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    .header-icons {
        display: flex;
        align-items: center;
    }

    .header-icons i {
        margin-right: 2rem;
        cursor: pointer;
    }

    .header-icons .account {
        width: 130px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .header-icons .account img {
        width: 35px;
        height: 35px;
        cursor: pointer;
        border-radius: 50%;
    }

    .container {
        margin-top: 10px;
        display: flex;
        justify-content: space-between;
    }

    /* Side menubar section */
    nav {
        background: #fff;
    }

    .side_navbar {
        padding: 1px;
        display: flex;
        flex-direction: column;
    }

    .side_navbar span {
        color: gray;
        margin: 1rem 3rem;
        font-size: 12px;
    }

    .side_navbar a {
        width: 100%;
        padding: 0.8rem 3rem;
        font-weight: 500;
        font-size: 15px;
        color: rgb(100, 100, 100);
    }


    .link-cont {
        background-color: #fff;
        border-radius: 8px;
        display: flex;
        align-items: center;
        width: 13%;
        margin-top: 13px;
        height: 50px;
        padding: 5px;

    }

    .links a {
        font-size: 13px;
    }

    .side_navbar a:hover {
        background: rgb(235, 235, 235);
    }

    .side_navbar .active {
        border-left: 2px solid rgb(100, 100, 100);
    }

    /* Main Body Section */
    .main-body {
        width: 140%;
        padding: 2rem;
    }

    .promo_card {
        width: 100%;
        color: #fff;
        margin-top: 10px;
        border-radius: 8px;
        padding: 0.5rem 1rem 1rem 3rem;
        background: rgb(37, 37, 37);
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .promo_card h1,
    .promo_card span,
    button {
        margin: 10px;
    }

    .promo_card button {
        display: block;
        padding: 6px 12px;
        border-radius: 5px;
        cursor: pointer;
    }

    .history_lists {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 3rem;
    }

    .row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 1rem 0;
    }

    table {
        background: #fff;
        padding: 1rem;
        text-align: left;
        border-radius: 10px;
    }

    table td,
    th {
        padding: 0.2rem 0.8rem;
    }

    table th {
        font-size: 15px;
    }

    table td {
        font-size: 13px;
        color: rgb(100, 100, 100);
    }



    /* Sidebar Section */
    .sidebar {
        width: 15%;
        padding: 2rem 1rem;
        background: #fff;
    }

    .sidebar h4 {
        margin-bottom: 1.5rem;
    }

    .sidebar .balance {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
    }

    .balance .icon {
        color: #fff;
        font-size: 20px;
        border-radius: 6px;
        margin-right: 1rem;
        padding: 1rem;
        background: rgb(37, 37, 37);
    }

    .balance .info h5 {
        font-size: 16px;
    }

    .balance .info span {
        font-size: 14px;
        color: rgb(100, 100, 100);
    }

    .balance .info i {
        margin-right: 2px;
    }



    /* Center the form on the page */
    .form-cont {
        background-color: #a9a9a9;
        border-radius: 8px;
        box-shadow: 2px 5px 5px #888888;
        padding: 23px;
        margin-top: 50px;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 50px;
    }

    /* Style the form inputs */
    input[type="text"] {
        padding: 8px;
        margin: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        width: 300px;
    }

    /* Style the submit button */
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-top: 15px;
    }

    /* Hover effect for the submit button */
    input[type="submit"]:hover {
        background-color: #3e8e41;
    }





    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        max-width: 600px;
    }

    .form-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .form-row input[type="text"],
    .form-row input[type="number"],
    .form-row input[type="date"],
    .form-row select,
    .form-row textarea {
        flex: 1;
        padding: 10px;
        margin: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 16px;
        width: 300px;
    }

    .form-row textarea {
        height: 150px;
        resize: vertical;
    }

    .form-row label {
        flex-basis: 100%;
        margin-bottom: 5px;
    }

h1{
    color: white;
}

.fa-angle-right,
.fa-angle-left{
   margin: .4rem; 
}
</style>
