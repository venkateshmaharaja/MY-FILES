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
import java.util.ArrayList;
import java.util.Arrays;
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
public class insert_rma extends HttpServlet {

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

//            java.util.Date utilDate = new java.util.Date();
//            java.sql.Date sqlDate = new java.sql.Date(utilDate.getTime());
//            java.util.Date date = new java.util.Date();
//            SimpleDateFormat sdf = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
//            String added_date = sdf.format(date);
            DateFormat df = new SimpleDateFormat("yyyy/MM/dd HH:mm:ss");
            Date dateobj = new Date();
            String currDate = df.format(dateobj);

            ///////////////////////////
            int m1 = 0;
            int y1 = 0;

            Date date = new Date();
//            String strDateFormat = "M";
            String strDateFormat = "MM";
            SimpleDateFormat sdf = new SimpleDateFormat(strDateFormat);

//            sdf = new SimpleDateFormat(strDateFormat);
            String mymonth = (sdf.format(date));
            m1 = Integer.parseInt(mymonth);
            String strDateFormat1 = "yy";
            SimpleDateFormat sdf1 = new SimpleDateFormat(strDateFormat1);
            String myyear = (sdf1.format(date));
            y1 = Integer.parseInt(myyear);

            DateFormat formatter = new SimpleDateFormat("yyyy/MM");
            String today1 = formatter.format(date);

            String test = "", rm = "RMA";
            String month1 = "";
            int min1 = 0;
            int key_in = 0;
            String rma = "", rma_no = "";
            int ab = 0;
            int m = 0;
            ResultSet rs1 = st.executeQuery("select rma_no from new_rma_tracker order by id");
            while (rs1.next()) {
                rma = rs1.getString(1);
                ab++;
                m++;
            }

            if (ab > 0) {
                rma_no = rma.substring(rma.length() - 3, rma.length());
                key_in = Integer.parseInt(rma_no);
                key_in++;
                test = String.valueOf(key_in);
                if (test.length() < 3) {
                    int j = test.length();
                    for (int i1 = j; i1 < 3; i1++) {
                        test = "0" + test;
                    }
                    rma_no = rm + "-" + myyear + mymonth + "-" + test;

                }
            } else {
                rma_no = rm + "-" + myyear + mymonth + "-" + "001";

            }
//            out.print(mymonth);
//            out.print(myyear);
//            out.print(m1);
//            out.print(y1);

            //////////////////////////////////////////
            int a = 0, b = 0;
            String serial_no_check = "";
            String serial_no_nos = request.getParameter("nos");
//            out.print(serial_no_nos);
            String[] unit_serial = request.getParameterValues("a");
            String[] customer_ref = request.getParameterValues("b");
            String[] prb_des = request.getParameterValues("c");
            String[] failure_type = request.getParameterValues("d");
            String[] rma_req_date = request.getParameterValues("e");
            String[] plant = request.getParameterValues("f");
            String[] cutomer_name = request.getParameterValues("g");
            String[] product_part = request.getParameterValues("h");
            String[] product_part_name = request.getParameterValues("i");
            String[] production_order = request.getParameterValues("j");
            String[] lot_no = request.getParameterValues("k");
            String[] invoice_no = request.getParameterValues("l");
            String[] shipment_date = request.getParameterValues("m");
//      int count=0;      
for(int k=0;k<product_part.length;k++){
            PreparedStatement ps1 = con.prepareStatement("insert into new_rma_master(rma_no,part_no,customer_name,serial_no_qty,added_by,added_date)values(?,?,?,?,?,?)");
            ps1.setString(1, rma_no);
            ps1.setString(2, product_part[k]);
            ps1.setString(3, cutomer_name[k]);
            ps1.setString(4, "1");
            ps1.setString(5, username);
            ps1.setString(6, currDate);
            b = ps1.executeUpdate();
}

            for (int i = 0; i < unit_serial.length; i++) {

                ResultSet rs = st.executeQuery("select unit_serial_no from new_rma_tracker where unit_serial_no='" + unit_serial[i] + "'");
                while (rs.next()) {
                    serial_no_check = rs.getString(1);
                }
                if (serial_no_check.equals(unit_serial[i])) {
                    response.setContentType("text/html");
                    out.println("<script type=\"text/javascript\">");
                    out.println("alert('unit sertal no already exists!!!');");
                    out.write("setTimeout(function(){window.location.href='New_rma_ro.jsp'},1);");
                    out.println("</script>");
                } else {
                    for (int t = 0; t < product_part.length; t++) {

                        PreparedStatement ps = con.prepareStatement("insert into new_rma_tracker(rma_no,unit_serial_no,customer_ref,prob_description,failure_type,rma_req_date,plant,customer_name,product_part,product_part_name,production_order,lot_no,invoice_no,shipment_date,status,added_by,added_date)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                        ps.setString(1, rma_no);
                        ps.setString(2, unit_serial[t]);
                        ps.setString(3, customer_ref[t]);
                        ps.setString(4, prb_des[t]);
                        ps.setString(5, failure_type[t]);
                        ps.setString(6, rma_req_date[t]);
                        ps.setString(7, plant[t]);
                        ps.setString(8, cutomer_name[t]);
                        ps.setString(9, product_part[t]);
                        ps.setString(10, product_part_name[t]);
                        ps.setString(11, production_order[t]);
                        ps.setString(12, lot_no[t]);
                        ps.setString(13, invoice_no[t]);
                        ps.setString(14, shipment_date[t]);
                        ps.setString(15, "Open");
                        ps.setString(16, username);
                        ps.setString(17, currDate);
                        a = ps.executeUpdate();
                    }
                }
            }
            


            if (a > 0 || b > 0) {
                response.setContentType("text/html");
                out.println("<script type=\"text/javascript\">");
                out.println("alert('RMA Data Inserted successfuly!!!');");
                out.write("setTimeout(function(){window.location.href='New_rma_ro.jsp'},1);");
                out.println("</script>");
            } else {
                response.setContentType("text/html");
                out.println("<script type=\"text/javascript\">");
                out.println("alert('RMA Data Not Inserted!!!');");
                out.write("setTimeout(function(){window.location.href='New_rma_ro.jsp'},1);");
                out.println("</script>");
            }

        } catch (Exception e) {
            out.print(e);
        }
    }

//                    out.print("<br>serial--->" + unit_serial[i]);
//                    out.print("<br>customer_ref--->" + customer_ref[i]);
//                    out.print("<br>prb_des--->" + prb_des[i]);
//                    out.print("<br>failure_type--->" + failure_type[i]);
//                    out.print("<br>rma_req_date--->" + currDate);
//                    out.print("<br>plant--->" + plant[i]);
//                    out.print("<br>cutomer_name--->" + cutomer_name);
//                    out.print("<br>shipment_date--->" + shipment_date[i]);
//                    out.print("<br>product_part--->" + product_part[i]);
//                    out.print("<br>product_part_name--->" + product_part_name[i]);
//                    out.print("<br>production_order--->" + production_order[i]);
//                    out.print("<br>lot_no--->" + lot_no[i]);
//                    out.print("<br>invoice_no--->" + invoice_no[i]);
//                    out.print("<br>username--->" + username);
//                    out.print("<br>added_date--->" + currDate);
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
