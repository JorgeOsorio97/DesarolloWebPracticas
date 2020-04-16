import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.ServletOutputStream;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.IOException;

@WebServlet(name = "FicheroServlet")
public class FicheroServlet extends HttpServlet {
    StringBuffer mensaje = null;
    FileOutputStream fos = null;
    String[] strTEXTO;

    public void init(ServletConfig config) throws ServletException
    {
        super.init(config);
        FileInputStream fis = null;
        mensaje = new StringBuffer();
        try
        {
            fis = new FileInputStream("/home/texto.txt");

            int caracter;
            while ( (caracter = fis.read()) != -1 )
            {
                mensaje.append((char)caracter);
            }
            fis.close();
        }
        catch(java.io.FileNotFoundException e)
        {
            e.printStackTrace();
        }catch(java.io.IOException e)
        {
            e.printStackTrace();
        }

        try
        {
            fos = new FileOutputStream("/home/log.txt");
        }catch(java.io.IOException e)
        {
            e.printStackTrace();
        }
    }

    public void service( HttpServletRequest peticion,
                         HttpServletResponse respuesta )throws ServletException, IOException
    {
        strTEXTO = peticion.getParameterValues("TEXTO");
        ServletOutputStream out = respuesta.getOutputStream();
        out.println("<p>"+mensaje+"</p>");
        out.println("<p>Su nombre es: "+strTEXTO[0]+"</p>");
        out.close();
        registrar();
    }

    public void destroy()
    {
        try
        {
            fos.close();
        }
        catch(java.io.IOException e)
        {
            e.printStackTrace();
        }
    }
    public synchronized void registrar()
    {
        try
        {
            fos.write(strTEXTO[0].getBytes());
        }
        catch(java.io.IOException e)
        {
            e.printStackTrace();
        }
    }

}
