using P1_ASP.Models;

namespace P1_ASP.Services
{
    public class RepositoryOfKnowledge
    {
        public List<ClassKnowledge> GetKnowledge()
        {

            return new List<ClassKnowledge>()
            {
                new ClassKnowledge
                {
                    Title = "Python application development technician",
                    Description = "CEPI BASE",
                    ImageURL = "/img/Python-logo.svg"
                },
                new ClassKnowledge
                {
                    Title = "Python application development technician",
                    Description = "CEPI BASE",
                    ImageURL = "/img/"
                },
                new ClassKnowledge
                {
                    Title = "Python application development technician",
                    Description = "CEPI BASE",
                    ImageURL = "/img/"
                },
                new ClassKnowledge
                {
                    Title = "Python application development technician",
                    Description = "CEPI BASE",
                    ImageURL = "/img/"
                }
            };
        }
    }
}
