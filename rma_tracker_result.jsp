<%-- 
    Document   : rma_tracker_stores
    Created on : 5 Mar, 2020, 11:28:32 AM
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
        <title>JSP Page</title>
    </head>
    <body>
        <%
            try{
            db_connection obj  = new db_connection();
            Connection con1=obj.getConnection();
            Statement st = con1.createStatement();

            String rma_no = "", customer_ref = "", prob_description = "", failure_type = "", rma_req_date = "", plant = "", customer_name = "", product_part = "", product_part_name = "", production_order = "", lot_no = "", invoice_no = "", shipment_date = "", status = "";
            String result = "";
            String serial_no = request.getParameter("name");
            out.print(serial_no);
            ResultSet rs = st.executeQuery("select rma_no,customer_ref,prob_description,failure_type,rma_req_date,plant,customer_name,product_part,product_part_name,production_order,lot_no,invoice_no,shipment_date,status from new_rma_tracker where unit_serial_no='" + serial_no + "'");
            while (rs.next()) {
                rma_no=rs.getString(1);
                customer_ref=rs.getString(2);
                prob_description=rs.getString(3);
                failure_type=rs.getString(4);
                rma_req_date=rs.getString(5);
                plant=rs.getString(6);
                customer_name=rs.getString(7);
                product_part=rs.getString(8);
                product_part_name=rs.getString(9);
                production_order=rs.getString(10);
                lot_no=rs.getString(11);
                invoice_no=rs.getString(12);
                shipment_date=rs.getString(13);
                status=rs.getString(14);
            }
           
            response.setContentType("text/plain");
            result = rma_no + '&' + customer_ref + '&' + prob_description + '&' + failure_type + '&' + rma_req_date + '&' + plant + '&' + customer_name + '&' + product_part + '&' + product_part_name + '&' + production_order + '&' + lot_no + '&' + invoice_no + '&' + shipment_date + '&' + status + '&';
            response.getWriter().write(result);
            }catch (Exception e) {
                out.print(e);
            }
            
        %>
    </body>
</html>
