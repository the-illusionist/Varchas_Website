<%@ page contentType="text/html; charset=utf-8" language="java" import="java.sql.*" errorPage="" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Varchas 14</title>
</head>

<body>
<%
String regname=request.getParameter("regname");
String regplace=request.getParameter("regplace");
String regemail=request.getParameter("regemail");
String regcaptain=request.getParameter("regcaptain");
String regnumber1=request.getParameter("regnumber1");
String regnumber2=request.getParameter("regnumber2");
String regsports=request.getParameter("regsports");
try
{
	Class.forName("com.mysql.jdbc.Driver").newInstance();
    Connection con=DriverManager.getConnection("jdbc:mysql://172.16.100.4:3306/ignus", "ignus", "ignus9876");
    Statement stat=con.createStatement();
stat.executeUpdate("INSERT INTO varchas14 (regname,regplace,regemail,regcaptain,regnumber1,regnumber2,regsports) VALUES('"+regname+"','"+regplace+"','"+regemail+"','"+regcaptain+"','"+regnumber1+"','"+regnumber2+"','"+regsports+"')");
		}catch(Exception e)
{out.println("Error Occurred");}%>
</body>
</html>
