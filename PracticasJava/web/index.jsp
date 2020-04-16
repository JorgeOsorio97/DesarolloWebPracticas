<%--
  Created by IntelliJ IDEA.
  User: jorgevaldez
  Date: 12/04/20
  Time: 16:41
  To change this template use File | Settings | File Templates.
--%>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html>
<head>
    <title>Segundo Servlet</title>
</head>
<body>
<h2><center>Segundo Servlet</center></h2>
<form action=/Practicas_war/FicheroServlet method=POST>
    <BR>
    <BR>
    <center>
        Introduzca su nombre y pulse el bot&oacute;n de enviar<BR>
        <BR><input type=text name=TEXTO>
        <BR>
        <BR><input type=submit value=Enviar Nombre>
        <input type=reset value=Borrar>
    </center>
</form>
</body>
</html>