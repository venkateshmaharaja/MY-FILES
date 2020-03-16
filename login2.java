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
import java.sql.ResultSet;
import java.sql.Statement;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 *
 * @author AV-IT-PC408
 */
public class login2 extends HttpServlet {

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
            db_connection obj  = new db_connection();
            Connection con1=obj.getConnection();
            Statement st = con1.createStatement();

            String username = "", password = "", access = "", team = "";
            username = request.getParameter("username");
            password = request.getParameter("password");

//           out.print("<br>"+username);
//           out.print("<br>"+password);
//           
            ResultSet rs = st.executeQuery("select username,access from users where username='" + username + "' and password='" + password + "' ");
            while (rs.next()) {
                username = rs.getString(1);
                access = rs.getString(2);
            }

            if (access.equals("user")) {
                session.setAttribute("username", username);
                session.setAttribute("access", access);
                response.setContentType("text/html");
                out.println("<script type=\"text/javascript\">");
                out.write("setTimeout(function(){window.location.href='home1.jsp'},1);");
                out.println("</script>");

            } else if (access.equals("admin")) {
                session.setAttribute("username", username);
                session.setAttribute("access", access);
                response.setContentType("text/html");
                out.println("<script type=\"text/javascript\">");
                out.write("setTimeout(function(){window.location.href='home1.jsp'},1);");
                out.println("</script>");
            }  else {
                session.setAttribute("error", "Invalid User ! ");
                response.sendRedirect("index.html");
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
