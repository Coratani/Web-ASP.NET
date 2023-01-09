using P1_ASP.Models;

namespace P1_ASP.Services
{
    public class RepositoryOfAcademicExperience
    {
        public List<ClassAcademic> GetAcademic()
        {

            return new List<ClassAcademic>() {
                new ClassAcademic {
                Title = "Scientific baccalaureate",
                Description = "INS Pau Claris",
                ImageURL = "/img/"
                },
                 new ClassAcademic {
                Title = "Web application development ",
                Description = "Monlau",
                ImageURL = "/img/"
                },
                  new ClassAcademic {
                Title = "High School",
                Description = "INS Pau Claris",
                ImageURL = "/img/"
                }
            };
        }
    }
}
