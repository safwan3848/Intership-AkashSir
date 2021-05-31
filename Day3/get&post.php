<html>
    <body>
<!--        method:1
        Get: get is a default method to pass data in form tag.
        Data will be visible in URL.
It's not secure to pass sensible data like username password.
its use full of sorting and searching record.

POST:post is a secure method to pass sensitive data.
     Data is a hidden.

Action:You can specify page name where data will submit.


-->
<h1>Form demo</h1>
  
<form action="process.php" method="post">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="txt1" required=""/></td>
                </tr>
                <tr>
                    <td>
                        Age
                    </td>
                    <td>
                        <input type="number" name="txt2" required=""/>
                    </td>
                </tr>
                <tr>
                    
                    <td>
                        Email
                    </td>
                    <td>
                        <input type="email" name="txt3" required="">
                    </td>
                </tr>
        
                <tr>
                    <td><input type="submit"/></td>
                    <td>
                        <input type="reset"/>
                    </td>
                </tr>
            </table>
       </form>
        
    </body>
    
    
    
    
</html>