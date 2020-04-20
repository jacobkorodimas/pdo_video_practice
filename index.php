<?php 
    $host = 'localhost';
    $user = 'jacob';
    $password = '1234';
    $dbname = 'pdoposts';

    //SET DSN (data source name) => describes connection to db
    $dsn = 'mysql:host='. $host .';dbname='. $dbname;

    //Create a PDO instance(dsn, user, password)
    $pdo = new PDO($dsn, $user, $password);
    //set attribute to default fetch object
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    //set attribute to turn off emulation
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

////////////////////////////////////////////////////////////////////////
    // PDO QUERY (no variables)
                             //(sql here)
    //$stmt = $pdo->query('SELECT * FROM posts');
    
        //assoc array
        //while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        //     echo $row['title'] . '<br>';
        //}

        //object
        //while($row = $stmt->fetch(PDO::FETCH_OBJ)){
        //     echo $row->title . '<br>';
        //}

//////////////////////////////////////////////////////////////////////
    //PDO QUERY(with variables)/PREPARED STATEMENTS
    //prepare and execute

            //User input
                //$author = 'josh';
                //$is_published = true;
                //$id = 1;


        //UNSAFE                  //sql can be injected here ↓
            // $sql = 'SELECT * FROM posts WHERE author = $author';


        //SAFE (PREPARE AND EXECUTE)

            // //Positional Params(question marks)
            
                // $sql = 'SELECT * FROM posts WHERE author = ?';
                // $stmt = $pdo->prepare($sql);
                // $stmt->execute([$author]);
                // $posts = $stmt->fetchAll();

            //Named Params(question marks)
            
                // $sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
                // $stmt = $pdo->prepare($sql);
                // $stmt->execute(['author' => $author, 'is_published' => $is_published]);
                // $posts = $stmt->fetchAll();
                
                // foreach($posts as $post){
                //     echo $post->title . '<br>';
                // }
////////////////////////////////////////////////////////////////////
            //FETCH SINGLE POST
                // $sql = 'SELECT * FROM posts WHERE id = :id';
                // $stmt = $pdo->prepare($sql);
                // $stmt->execute(['id' => $id]);
                // $post = $stmt->fetch();
                // echo $post->body;
            //GET ROW COUNT
                // $stmt = $pdo->prepare('SELECT * FROM posts WHERE author = ?');
                // $stmt->execute([$author]);
                // $postCount = $stmt->rowCount();
                // echo $postCount;
            //INSERT DATA
                //User input
                    //$title = 'post five';
                    //$body = 'this is post five';
                    //$author = 'Kevin';
                //$sql = 'INSERT INTO posts(title,body,author) VALUES(?,?,?)';
                //$stmt = $pdo->prepare($sql);
                //$stmt->execute([$title, $body, $author]);
                //echo 'Post Added';
            //UPDATE DATA
                //User input
                    //$id = 1;
                    //$body = 'This is the updated post';
                // $sql = 'UPDATE posts SET body =:body WHERE id = :id';
                // $stmt = $pdo->prepare($sql);
                // $stmt->execute(['body' => $body, 'id' => $id]);
                // echo 'Post Updated';
            //DELETE DATA
                //User input
                    //$id = 3;
                // $sql = 'DELETE FROM posts WHERE id = :id';
                // $stmt = $pdo->prepare($sql);
                // $stmt->execute(['id' => $id]);
                // echo 'Post Deleted';
            //SEARCH DATA
                //$search = "%f%";
                //$sql = 'SELECT * FROM posts WHERE title LIKE ?';
                //$stmt = $pdo->prepare($sql);
                //$stmt->execute([$search]);
                //$posts = $stmt->fetchAll();

                //foreach($posts as $post){
                    // echo $post->title . '<br>';
                // }
            //LIMIT DISPLAYED DATA
                    //User input
                        //$limit = 1;
                // $sql = 'SELECT * FROM posts WHERE author = ? && is_published = ? LIMIT ?';
                // $stmt = $pdo->prepare($sql);
                // $stmt->execute([$author, $is_published, $limit]);
                // $posts = $stmt->fetchAll();

                // foreach($posts as $post){
                //     echo $post->title . '<br>';
                // }
            
?>

