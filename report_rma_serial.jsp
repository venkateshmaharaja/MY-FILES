<%-- 
    Document   : report_rma_serial
    Created on : 29 Feb, 2020, 3:59:37 PM
    Author     : AV-IT-PC428
--%>

<%@page import="db.db_connection"%>
<%@page import="java.sql.ResultSet"%>
<%@page import="java.sql.Statement"%>
<%@page import="java.sql.Connection"%>
<%@page import="db.Database_Connection"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/cardstyle.css">
        <link rel="stylesheet" type="text/css" href="css/inputstyle.css">
        <title>REPORT RMA/RO</title>
    </head>
    <body>
        <%
            db_connection obj = new db_connection();
            Connection con = obj.getConnection();
            Statement st = con.createStatement();
        %>
        <jsp:include page="/topnav.jsp"></jsp:include>
            <div class="card-form__inner">
                <form action="report_rma_serial_all.jsp" method="post">
                    <table border="1" align="center" style="border-collapse: collapse;">
                        <tr>
                            <th colspan="2"><h2><b>RMA Serial No</b></h2></th>
                        </tr>
                        <tr>
                            <th>RMA No</th>
                            <td>
                                <select name="rma_no" id="rma_no">
                                    <option></option>
                                <%
                                    ResultSet rs = st.executeQuery("select rma_no from new_rma_tracker where rma_no!='null' order by rma_no");
                                    while (rs.next()) {
                                %>
                                <option value="<%=rs.getString(1)%>"><%=rs.getString(1)%></option>
                                <%
                                    }
                                %>
                        </td>
                    </tr>
                    <tr>
                        <th>Unit Serial No</th>
                        <td>
                            <select name="unit_serail" id="unit_serial">
                                <option></option>
                                <%
                                    ResultSet rs1 = st.executeQuery("select unit_serial_no from new_rma_tracker order by unit_serial_no");
                                    while (rs1.next()) {
                                %>
                                <option value="<%=rs1.getString(1)%>"><%=rs1.getString(1)%></option>
                                <%
                                    }
                                %>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <th>Date</th>
                        <td>
                            <input type="date" name="from_date" id="from_date">
                            <input type="date" name="to_date" id="to_date">
                        </td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <select name="status" id="status">
                                <option value="Open">Open</option>
                                <option value="Received">Received</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <input type="submit" name="Submit">&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="reset" name="Reset">
                        </th>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
