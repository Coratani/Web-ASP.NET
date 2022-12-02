using P1_ASP.Models;

namespace P1_ASP.Services
{
    public class RepositoryOfProjects
    {
        public List<ClassProjects> GetProjects() {

            return new List<ClassProjects>() {
                new ClassProjects {
                Title = "ASP.net",
                Description = "WEB realizado en ASP.NET Core",
                Link = "https://amazon.com",
                ImageURL = "/img/1366_2000.jpg"
                },
                 new ClassProjects {
                Title = "Java Script",
                Description = "Animación realizado en JS",
                Link = "https://Monlau.com",
                ImageURL = "/img/q79j6x3o.bmp"
                },
                  new ClassProjects {
                Title = "Java Script",
                Description = "Animación realizado en JS",
                Link = "https://Monlau.com",
                ImageURL = "/img/present.bmp"
                },
                   new ClassProjects {
                Title = "Java Script",
                Description = "Animación realizado en JS",
                Link = "https://Monlau.com",
                ImageURL = "/img/retro.bmp"
                },
                    new ClassProjects {
                Title = "Java Script",
                Description = "Animación realizado en JS",
                Link = "https://Monlau.com",
                ImageURL = "/img/grid_bg.bmp"
                }
            };
        }
    }
}
