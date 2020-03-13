<%-- 
    Document   : index
    Created on : Feb 25, 2020, 11:01:49 AM
    Author     : AV-IT-PC534
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <link rel="stylesheet" type="text/css" href="css/Navstyle.css">
        <!--<link rel="stylesheet" type="text/css" href="css/cardstyle.css">-->
        <link rel="stylesheet" type="text/css" href="css/dropdown.css">

    </head>
    <%
        try {

            String username1 = (String) session.getAttribute("username");
            String access1 = (String) session.getAttribute("access");

            session.setAttribute("user", username1);
            session.setAttribute("access", access1);

    %>
    <body><br><br><br>

        <!--<div class="card-form__inner">-->

        <div class="topnav">
            <%   
                 if (access1.equals("admin") && username1.equals("stores")) {
            %>
            <a href="home1.jsp">HOME</a>
<!--            <a href="New_rma_ro.jsp">CREATE NEW RMA / RO NO</a>
            <a href="">EDIT RMA / RO</a>-->
            <a href="stores.jsp">STORES / RO</a>
            <a href="report_rma_serial.jsp">RMA / RO REPORT</a>
            <!--          
                          <div class="dropdown">
                                    <button class="dropbtn" style="margin-top: 2px;">DROPDOWN</button>
                                    <div class="dropdown-content">
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                        
                                    </div>
                                </div> -->
       
        <%
            }
       
               else if (access1.equals("admin")) {
            %>
            <a href="home1.jsp">HOME</a>
            <a href="New_rma_ro.jsp">CREATE NEW RMA / RO NO</a>
            <!--<a href="">EDIT RMA / RO</a>-->
            <!--<a href="stores.jsp">STORES / RO</a>-->
            <a href="report_rma_serial.jsp">RMA / RO REPORT</a>
            <!--          
                          <div class="dropdown">
                                    <button class="dropbtn" style="margin-top: 2px;">DROPDOWN</button>
                                    <div class="dropdown-content">
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                        
                                    </div>
                                </div> -->
       
        <%
            }else if(access1.equals("user")){
        %>
        <a href="home1.jsp">HOME</a>
            <a href="New_rma_ro.jsp">CREATE NEW RMA / RO NO</a>
            <!--<a href="">EDIT RMA / RO</a>-->
            <a href="report_rma_serial.jsp">RMA / RO REPORT</a>
            <!--          
                          <div class="dropdown">
                                    <button class="dropbtn" style="margin-top: 2px;">DROPDOWN</button>
                                    <div class="dropdown-content">
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                        
                                    </div>
                                </div> -->
        <%
            }    
%>
         </div>
    </body>
    <%
        } catch (Exception e) {
            out.print(e);
        }
    %>
</html>
