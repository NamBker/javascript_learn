<html>
   <head>
   
   <title>User-defined objects</title>
   
      <script type="text/javascript">
         function book(title, author){
            this.title = title; 
            this.author  = author;
         }
      </script>
      
   </head>
   <body>
   
      <script type="text/javascript">
         var myBook = new book("Perl", "Mohtashim");
         document.write("Book title is : " + myBook.title + "<br>");
         document.write("Book author is : " + myBook.author + "<br>");
      </script>
      
   </body>
</html>