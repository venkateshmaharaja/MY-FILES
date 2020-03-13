<%-- 
    Document   : report_rma_serial_all
    Created on : 6 Mar, 2020, 3:28:55 PM
    Author     : AV-IT-PC428
--%>

<%@page import="java.sql.ResultSet"%>
<%@page import="java.text.SimpleDateFormat"%>
<%@page import="java.util.Date"%>
<%@page import="java.text.DateFormat"%>
<%@page import="db.db_connection"%>
<%@page import="java.sql.Statement"%>
<%@page import="java.sql.Connection"%>
<%@page import="db.Database_Connection"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <%
            String access = (String) session.getAttribute("access");
            String team = (String) session.getAttribute("team");
            String username = (String) session.getAttribute("username");
        %>
        <jsp:include page="/topnav.jsp"></jsp:include>
            <div class="card-form__inner">
                <br><br>
                <table border="1" align="center" style="border-collapse: collapse;">
                    <thead>
                    <tr>
                        <th colspan="18"><h2><b>RMA/RO Report</b></h2></th>
                    </tr>
                    <th>Sno</th>
                    <th>RMA No</th>
                    <th>Unit Serial No</th>
                    <th>Customer Ref</th>
                    <th>Prb Description</th>
                    <th>Failure Type</th>
                    <th>RMA Req Date</th>
                    <th>Plant</th>
                    <th>Customer Name</th>
                    <th>Product Part</th>
                    <th>Product Part Name</th>
                    <th>Production Order</th>
                    <th>lot No</th>
                    <th>Invoice No</th>
                    <th>Shipment Date</th>
                    <th>Status</th>
                    <th>Added by</th>
                    <th>Added Date</th>
                    
                    </thead>
            <%
                db_connection obj = new db_connection();
                Connection con = obj.getConnection();
                Statement st = con.createStatement();

                DateFormat df = new SimpleDateFormat("yyyy/MM/dd HH:mm:ss");
                Date dateobj = new Date();
                String currDate = df.format(dateobj);

                String rma_no = "", unit_serail = "", from_date = "", to_date = "", status = "";
                rma_no = request.getParameter("rma_no");
                unit_serail = request.getParameter("unit_serail");
                from_date = request.getParameter("from_date");
                to_date = request.getParameter("to_date");
                status = request.getParameter("status");
                ResultSet rs = null;

                if (!rma_no.equals("")) {
                    rs = st.executeQuery("select * from new_rma_tracker where rma_no='" + rma_no + "'");
                }else if(!unit_serail.equals("")){
                    rs=st.executeQuery("select * from new_rma_tracker where unit_serial_no='" + unit_serail + "'");
                }else if(!from_date.equals("") && !to_date.equals("")){
                    rs=st.executeQuery("select * from new_rma_tracker where shipment_date between '" + from_date + "' and '"+to_date+"'");
                }else if(!status.equals("")){
                    rs=st.executeQuery("select * from new_rma_tracker where status='" + status + "'");
                }else{
                 rs=st.executeQuery("select * from new_rma_tracker");   
                }
                int i=1;
                while(rs.next()){
            %>
            <tbody>
                <tr>
                    <td><%=i%></td>
                    <td><%=rs.getString(2)%></td>
                    <td><%=rs.getString(3)%></td>
                    <td><%=rs.getString(4)%></td>
                    <td><%=rs.getString(5)%></td>
                    <td><%=rs.getString(6)%></td>
                    <td><%=rs.getString(7)%></td>
                    <td><%=rs.getString(8)%></td>
                    <td><%=rs.getString(9)%></td>
                    <td><%=rs.getString(10)%></td>
                    <td><%=rs.getString(11)%></td>
                    <td><%=rs.getString(12)%></td>
                    <td><%=rs.getString(13)%></td>
                    <td><%=rs.getString(14)%></td>
                    <td><%=rs.getString(15)%></td>
                    <td><%=rs.getString(16)%></td>
                    <td><%=rs.getString(17)%></td>
                    <td><%=rs.getString(18)%></td>
                </tr>
                <%
                    i++;
                    }
                %>
            </tbody>
                </table>
        </div>
    </body>

</html>
