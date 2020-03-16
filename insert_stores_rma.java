/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rma;

import db.db_connection;
import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.Statement;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 *
 * @author AV-IT-PC428
 */
public class insert_stores_rma extends HttpServlet {

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        HttpSession session = request.getSession(true);
        try {
            String access = (String) session.getAttribute("access");
            String team = (String) session.getAttribute("team");
            String username = (String) session.getAttribute("username");

            db_connection obj = new db_connection();
            Connection con = obj.getConnection();
            Statement st = con.createStatement();

            DateFormat df = new SimpleDateFormat("yyyy/MM/dd HH:mm:ss");
            Date dateobj = new Date();
            String currDate = df.format(dateobj);

            String serial_no_check = "";
            int a = 0, b = 0;

            String[] unit_serial = request.getParameterValues("a");
            String[] rma_no = request.getParameterValues("b");
            String[] customer_ref = request.getParameterValues("c");
            String[] prb_des = request.getParameterValues("d");
            String[] failure_type = request.getParameterValues("e");
            String[] rma_req_date = request.getParameterValues("f");
            String[] plant = request.getParameterValues("g");
            String[] cutomer_name = request.getParameterValues("h");
            String[] product_part = request.getParameterValues("i");
            String[] product_part_name = request.getParameterValues("j");
            String[] production_order = request.getParameterValues("k");
            String[] lot_no = request.getParameterValues("l");
            String[] invoice_no = request.getParameterValues("m");
            String[] shipment_date = request.getParameterValues("n");
            String[] status = request.getParameterValues("o");

            for (int i = 0; i < unit_serial.length; i++) {
                int z = 0;
                ResultSet rs = st.executeQuery("select unit_serial_no from new_rma_tracker where unit_serial_no='" + unit_serial[i] + "'");
                while (rs.next()) {
                    serial_no_check = rs.getString(1);
                    z++;

                }
                if (serial_no_check.equals(unit_serial[i])) {
                    PreparedStatement ps = con.prepareStatement("update new_rma_tracker set status='Received' where unit_serial_no='" + unit_serial[i] + "' ");
                    a = ps.executeUpdate();
                    if (a > 0) {
                        response.setContentType("text/html");
                        out.println("<script type=\"text/javascript\">");
                        out.println("alert('Updated Status successfuly!!!');");
//                    out.write("setTimeout(function(){window.location.href='stores.jsp'},1);");
                        out.println("</script>");
                    } else {
                        response.setContentType("text/html");
                        out.println("<script type=\"text/javascript\">");
                        out.println("alert('Status Not Updated!!!');");
//                out.write("setTimeout(function(){window.location.href='stores.jsp'},1);");
                        out.println("</script>");
                    }
                } else {
                    PreparedStatement ps1 = con.prepareStatement("insert into new_rma_tracker(rma_no,unit_serial_no,customer_ref,prob_description,failure_type,rma_req_date,plant,customer_name,product_part,product_part_name,production_order,lot_no,invoice_no,shipment_date,status,added_by,added_date)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                    ps1.setString(1, null);
                    ps1.setString(2, unit_serial[i]);
                    ps1.setString(3, "");
                    ps1.setString(4, "");
                    ps1.setString(5, "");
                    ps1.setString(6, null);
                    ps1.setString(7, "");
                    ps1.setString(8, "");
                    ps1.setString(9, "");
                    ps1.setString(10, "");
                    ps1.setString(11, "");
                    ps1.setString(12, "");
                    ps1.setString(13, "");
                    ps1.setString(14, null);
                    ps1.setString(15, "Open");
                    ps1.setString(16, username);
                    ps1.setString(17, currDate);
                    b = ps1.executeUpdate();
                }
            }

            if (b > 0) {
                response.setContentType("text/html");
                out.println("<script type=\"text/javascript\">");
                out.println("alert('unit serial no Data Inserted successfuly!!!');");
                out.write("setTimeout(function(){window.location.href='stores.jsp'},1);");
                out.println("</script>");
            } else {
                response.setContentType("text/html");
                out.println("<script type=\"text/javascript\">");
                out.println("alert('unit serial no Data Not Inserted!!!');");
                out.write("setTimeout(function(){window.location.href='stores.jsp'},1);");
                out.println("</script>");
            }
        } catch (Exception e) {
            out.print(e);
        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
