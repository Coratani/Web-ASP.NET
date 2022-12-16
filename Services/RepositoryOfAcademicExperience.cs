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
                Description = "IES Pau Claris",
                ImageURL = "/img/"
                },
                 new ClassAcademic {
                Title = " ",
                Description = "",
                ImageURL = "/img/"
                },
                  new ClassAcademic {
                Title = "",
                Description = "",
                ImageURL = "/img/"
                }
            };
        }
    }
}
