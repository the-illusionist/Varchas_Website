<%@ page contentType="text/html; charset=utf-8" language="java" import="java.sql.*" errorPage="" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<%
String check=request.getParameter("check");
try{
	Class.forName("com.mysql.jdbc.Driver").newInstance();
    Connection con=DriverManager.getConnection("jdbc:mysql://172.16.100.4:3306/ignus", "ignus", "ignus9876");
    Statement stat=con.createStatement();
	if(check.equals("1"))
	{
		String criteria=request.getParameter("criteria");
		ResultSet r=stat.executeQuery("SELECT DISTINCT("+criteria+") FROM varchas14");
		String output="<select name=criteriavalue id=criteriavalue onchange=database_data()><option>Select values to display...</option><option value=All>All</option>";
		while(r.next())
		{
			output+="<option value="+r.getString(1)+">"+r.getString(1)+"</option>";
		}
		output+="</select>";
		out.println(output);
	}
	else if(check.equals("2"))
	{
		String criteria=request.getParameter("criteria");
		String criteriavalue=request.getParameter("values");
		ResultSet r;
		if(criteriavalue.equals("All"))
		{
			r=stat.executeQuery("SELECT * FROM varchas14");
		}
		else
		{
			r=stat.executeQuery("SELECT * FROM varchas14 WHERE "+criteria+"='"+criteriavalue+"'");
		}
		int i=1;
		String output="<table width=\"100%\"><tr><td width\"1%\">Sr. No</td><td width=\"12.5%\">Name</td><td width=\"12.5%\">Email</td><td width=\"12.5%\">Place</td><td width=\"12.5%\">Number 1</td><td width=\"12.5%\">Number 2</td><td width=\"11.5%\">Sports</td><td width=\"12.5%\">Captain</td></tr>";
		while(r.next())
		{
			i++;
			output+="<tr><td>"+i+"</td><td>"+r.getString("regname")+"</td><td>"+r.getString("regemail")+"</td><td>"+r.getString("regplace")+"</td><td>"+r.getString("regnumber1")+"</td><td>"+r.getString("regnumber2")+"</td><td>"+r.getString("regsports")+"</td><td>"+r.getString("regcaptain")+"</td></tr>";
		}
		output+="</table>";
		out.println(output);
	}
con.close();
}catch(Exception e)
{
	out.println(e);
}
%>
</body>
</html>