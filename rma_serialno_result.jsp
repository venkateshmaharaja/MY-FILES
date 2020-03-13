<%-- 
    Document   : rma_serialno_result
    Created on : 26 Feb, 2020, 4:40:13 PM
    Author     : AV-IT-PC428
--%>

<%@page import="java.sql.Connection"%>
<%@page import="db.Database_Connection"%>
<%@page import="java.sql.ResultSet"%>
<%@page import="db.db_connection"%>
<%@page import="java.sql.Statement"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <%
            try {

//                String username = (String) session.getAttribute("username");
//                String access = (String) session.getAttribute("access");
//
//                if ((session.getAttribute("username") == null) || (session.getAttribute("username") == "")) {
//                    response.sendRedirect("login.html");
//                }
////
//                session.setAttribute("user", username);
//                session.setAttribute("access", access);
//                
                Database_Connection obj = new Database_Connection();
                Connection con = obj.getConnection();
                Statement st = con.createStatement();

                String part_no;
                String serial_no = request.getParameter("name");
                
                out.print(serial_no);
                String product_part = "", production_order = "", lot_no = "", invoice = "", shipment_date = "", customer_name = "", prod_name = "", plant = "";
                String result = "";
                int i = 0;

                ResultSet rs = st.executeQuery("select wo.assy_id,se.work_order_id,wo.lot_no,pm.invoice,pm.invoiced_date from AVMTS.dbo.serialize as se join AVMTS.dbo.workorders as wo on se.work_order_id=wo.work_order_id join AVMTS.dbo.packed_details as pd on pd.serial_no=se.serial_no join AVMTS.dbo.packing_master as pm on pm.box_id=pd.box_id where se.serial_no='" + serial_no + "'");
                while (rs.next()) {
                    product_part = rs.getString(1);
                    production_order = rs.getString(2);
                    lot_no = rs.getString(3);
                    invoice = rs.getString(4);
                    shipment_date = rs.getString(5);
                }
                ResultSet rs2 = st.executeQuery("select customer_name,prod_name,plant from AV_EMAC.dbo.product_master_pcb where part_no='" + product_part + "'");
                while (rs2.next()) {
                    customer_name = rs2.getString(1);
                    prod_name = rs2.getString(2);
                    plant = rs2.getString(3);
                    i++;
                }
                if (i == 0) {
                    ResultSet rs3 = st.executeQuery("select customer_name,prod_name,plant from AV_EMAC.dbo.product_master_sig where part_no='" + product_part + "'");
                    while (rs3.next()) {
                        customer_name = rs3.getString(1);
                        prod_name = rs3.getString(2);
                        plant = rs3.getString(3);
                    }
                }
                response.setContentType("text/plain");
                result = product_part + '&' + production_order + '&' + lot_no + '&' + invoice + '&' + shipment_date + '&' + customer_name + '&' + prod_name + '&' + plant + '&';
                response.getWriter().write(result);
                
            } catch (Exception e) {
                out.print(e);
            }
        %>
    </body>
</html>
