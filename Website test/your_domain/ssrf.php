<?php  
// ssrf.php

if (isset($_GET['url'])) {
    // L?y URL t? liên k?t
    $url = $_GET['url'];

    // G?i yêu c?u d?n URL du?c nh?p
    $response = file_get_contents($url);
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gi?i thi?u v? Bookflix</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h2, h3 {
            text-align: center;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        p {
            text-align: justify;
            font-size: 1.1em;
            color: #555;
            line-height: 1.6;
        }
        a {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s;
        }
        a:hover {
            background: #0056b3;
        }
        pre {
            background: #eee;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h2, h3 {
            text-align: center;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        p {
            text-align: justify;
            font-size: 1.1em;
            color: #555;
            line-height: 1.6;
        }
        .button-link {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background: linear-gradient(45deg, #ff5733, #c70039);
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: bold;
        }
        .button-link:hover {
            background: linear-gradient(45deg, #c70039, #ff5733);
            transform: scale(1.05);
        }
        pre {
            background: #eee;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
        .button-container {
    display: flex;                /* S? d?ng flexbox */
    justify-content: center;      /* Can gi?a theo chi?u ngang */
    align-items: center;          /* Can gi?a theo chi?u d?c (n?u c?n) */
    height: 100vh;               /* Chi?u cao c?a container (tu? ch?n) */
}

.button-link {
    padding: 10px 20px;          /* Ð?nh d?ng cho nút */
    background-color: #007bff;   /* Màu n?n cho nút */
    color: white;                 /* Màu ch? */
    text-decoration: none;        /* B? g?ch chân */
    border-radius: 5px;          /* Bo góc */
}

    </style>
</head>
<body>
 <?php if (isset($response)): ?>
            
            <pre><?php echo htmlspecialchars($response); ?></pre>
        <?php endif; ?>
    <div class="container">
        <h2>About Bookflix</h2>
        <p>Bookflix is ??an e-commerce platform specializing in providing online books with a diverse and rich library, serving the reading needs of all ages. Bos okflixo create a friendly space, helping people easily find their favorite books, explore new genres, and experience the endless world of knowledge. For Bookflix, books are not just pages of paper but also a bridge to inspire, motivate and provide knowledge to help each person develop themselves. </p>

        <p>Bookflix offers a wide range of book genres, from literature, science, history, psychology, to specialized genres and childre books. In addition, the site also updates the latest book trends so that readers always have a wide range of choices. For Bookflix, each book has its own story and value, and we are committed to bringing the best quality books to readers.</p>

        <h3>Management system and user features</h3>
        <p>Bookflix has a user-friendly management system that allows you to easily create an account, log in, and manage your personal activities. From searching for books by keyword, filtering books by genre, to viewing detailed information of each book, every operation is optimized for the smoothest user experience. Outstanding features such as shopping cart management, ordering, tracking orders, and viewing shopping history are all designed to be simple and easy to understand, helping users, even those who are not tech-savvy, to use it easily.</p>

        <p>Bookflix also offers book reviews and comments, where users can share their thoughts on the books they have read and consult with the community of readers. Additionally, our notification system sends regular updates on promotions, new book releases, and special events so users never miss a beat.</p>

        <

        <h3>Connecting the book-loving community</h3>
        <p>Bookflix is ??not only an e-commerce site but also a community connecting book lovers. Through features such as sharing reviews, comments and ratings, users can interact and exchange with people with similar interests, and at the same time explore different perspectives on the works they love. Bookflix organizes online reading events, book discussions and exchange programs with famous authors, providing opportunities for community members to meet and connect.</p>
        
         <h3>Join the Bookflix community</h3>
        <p>Click the link below to join our book-loving community:</p>
        <div class="button-container">
    <a class="button-link" href="ssrf.php?url=https://www.fahasa.com/sach-trong-nuoc.html">Join the Community</a>
</div>


       
    </div>
</body>
</html>
