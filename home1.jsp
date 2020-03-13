<%-- 
    Document   : home1
    Created on : 25 Feb, 2020, 2:31:49 PM
    Author     : AV-IT-PC428
--%>

<%@page import="java.text.SimpleDateFormat"%>
<%@page import="java.util.Calendar"%>
<%@page import="java.util.Calendar"%>
<%@page import="java.text.DateFormat"%>
<%@page import="java.text.DateFormat"%>
<%@page import="java.sql.Statement"%>
<%@page import="java.sql.Connection"%>
<%@page import="db.db_connection"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
         <%@include file="topnav.jsp"%>

        <%
            try {

                String username = (String) session.getAttribute("username");
                String access = (String) session.getAttribute("access");

                if ((session.getAttribute("username") == null) || (session.getAttribute("username") == "")) {
                    response.sendRedirect("login.html");
                }
//
                session.setAttribute("user", username);
                session.setAttribute("access", access);

                db_connection con1 = new db_connection();
//                Connection obj = con.getConnection();
                Statement st1 = con1.createStatement();

                DateFormat df = new SimpleDateFormat("yyyy-MM-dd HH:MM:ss");
                java.util.Date today = Calendar.getInstance().getTime();
                String todaydate = df.format(today);

                String year = todaydate.substring(0, 4);
        %>
        <%--<jsp:include page="/topnav.jsp"></jsp:include>--%>
        
            <div class="card-form__inner">
                <center>   <h1>RMA TRACKER</h1></center>
            </div>
        <%  
            } catch (Exception e) {
                out.print(e);
            }
        %>
    </body>
</html>
