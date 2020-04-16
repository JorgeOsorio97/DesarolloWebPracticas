import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.IOException;
import javax.servlet.*;
import javax.servlet.http.*;

@WebServlet(name = "SegundoServlet")
public class SegundoServlet extends HttpServlet {
    String nombre;
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {

    }

//    protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
//        nombre = request.getParameter("NOMBRE");
//        ServletOutputStream out = response.getOutputStream();
//        out.println("<html>");
//        out.println("<head><title>HolaTalServlet</title></head>");
//                out.println("<body>");
//        out.println("<p><h1><center>Su nombre es:<B>"+nombre+"</B></center></h1></p>");
//        out.println("</body></html>");
//        out.close();
//    }
    protected void service(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        nombre = request.getParameter("NOMBRE");
        ServletOutputStream out = response.getOutputStream();
        out.println("<html>");
        out.println("<head><title>HolaTalServlet</title></head>");
        out.println("<body>");
        out.println("<p><h1><center>Su nombre es:<B>"+nombre+"</B></center></h1></p>");
        out.println("</body></html>");
        out.close();
    }
}
