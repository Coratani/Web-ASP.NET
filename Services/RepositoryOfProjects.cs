using Microsoft.AspNetCore.Html;
using P1_ASP.Models;

namespace P1_ASP.Services
{
    public class RepositoryOfProjects
    {
        public List<ClassProjects> GetProjects() => new List<ClassProjects>() {
                new ClassProjects {
                Title = "Reloj Mundial",
                Description = "Reloj con mapa mundial que cambia segun el huso horario.",
                Technology=new HtmlString("<i class='fa-brands fa-html5'></i> <i class='fa-brands fa-css3-alt'></i> <i class='fa-brands fa-square-js'></i> <i class='fa-brands fa-bootstrap'></i>"),
                Link = "../Proyectos/RelojMundial/index.html",
                ImageURL = "/img/relojMundial.png"
                },
                 new ClassProjects {
                Title = "Concurso preguntas",
                Description = "Juego de preguntas y respuestas",
                Technology=new HtmlString("<i class='fa-brands fa-html5'></i> <i class='fa-brands fa-css3-alt'></i> <i class='fa-brands fa-square-js'></i> <i class='fa-brands fa-bootstrap'></i>"),
                Link = "../Proyectos/Concurso/index.html",
                ImageURL = "/img/gameShow.webp"
                },
                  new ClassProjects {
                Title = "Orden con bootstrap",
                Description = "Proyecto con el que se muestra el orden y el tamaño que se puede utilizar con las columnas de bootstrap",
                Link =  "../Proyectos/FCB/FBC.html",
                Technology=new HtmlString("<i class='fa-brands fa-html5'></i> <i class='fa-brands fa-css3-alt'></i> <i class='fa-brands fa-square-js'></i> <i class='fa-brands fa-bootstrap'></i>"),
                ImageURL = "/img/Oldest_House.webp"
                },
                   new ClassProjects {
                Title = "Historia interactiva",
                Description = "Historia interactiva en la que el usuario elige su propio final, todo esto utilizando drag & drop",
                Technology=new HtmlString("<i class='fa-brands fa-html5'></i> <i class='fa-brands fa-css3-alt'></i> <i class='fa-brands fa-square-js'></i> <i class='fa-brands fa-bootstrap'></i>"),
                Link = "../Proyectos/HistoriaInteractiva/index.html",
                ImageURL = "/img/logo.png"
                }

            };
    }
}
