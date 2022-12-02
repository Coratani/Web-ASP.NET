using P1_ASP.Models;

namespace P1_ASP.Services
{
    public class RepositoryOfJobs
    {
        public List<ClassJobs> GetJobs() {

            return new List<ClassJobs>() {
                new ClassJobs {
                Title = "Starbucks",
                Description = "Barista ",
                ImageURL = "/img/1366_2000.jpg"
                },
                 new ClassJobs {
                Title = "Tim Hortons",
                Description = "Baker",
                
                ImageURL = "/img/q79j6x3o.bmp"
                },
                  new ClassJobs {
                Title = "Java Script",
                Description = "Animación realizado en JS",
               
                ImageURL = "/img/present.bmp"
                },
                   new ClassJobs {
                Title = "Java Script",
                Description = "Animación realizado en JS",
             
                ImageURL = "/img/retro.bmp"
                },
                    new ClassJobs {
                Title = "Java Script",
                Description = "Animación realizado en JS",
              
                ImageURL = "/img/grid_bg.bmp"
                }
            };
        }
    }
}
