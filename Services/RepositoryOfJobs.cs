using P1_ASP.Models;

namespace P1_ASP.Services
{
    public class RepositoryOfJobs
    {
        public List<ClassJobs> GetJobs() {

            return new List<ClassJobs>() {
                new ClassJobs {
                Title = "Starbucks",
                Description = "Barista",
                ImageURL = "/img/Sbx.png"
                },
                 new ClassJobs {
                Title = "Tim Hortons",
                Description = "Baker",                
                ImageURL = "/img/Th.png"
                },
                  new ClassJobs {
                Title = "TGI Fridays",
                Description = "Waiter",
                ImageURL = "/img/Tgi.png"
                }
            };
        }
    }
}
