<?php

use Illuminate\Database\Seeder;

class CompaniesPositionsSeeder extends Seeder
{




    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $companies = $this->getCompanies();
        $this->fillObjects(\App\Models\Company::class, $companies);

        $positions = $this->getPositions();
        $this->fillObjects(\App\Models\Position::class, $positions);

    }

    private function fillObjects(string $className, array $data) {
        foreach($data as $object) {
            $newObject = new $className;
            foreach ($object as $field => $value) {
                $newObject->$field = $value;
            }
            $newObject->save();

        }
    }

    private function getCompanies()
    {
        return [
            [
                'id' => 1,
                'name' => 'Jobtip'
            ], [
                'id' => 2,
                'name' => 'efisco'
            ]
        ];
    }

    private function getPositions()
    {
        return [
            [
                'reference' => 'backendDeveloper-123',
                'title' => 'Backend developer',
                'email' => 'hr@jobtip.com',
                'company_id' => 1,
                'jobDescription' => '<h1>Company Introduction</h1>
<p>The Jobtip development team is
building complex and innovative
solution for the Social
Recruitment. These solutions
maximize the full potential of
clients companies by matching
their employment needs with the
right candidates, creating
unparalleled employees
satisfaction and productivity.</p>

<h1>Job Description</h1>
<p>We are looking for a Back-End Web Developer responsible for managing the interchange of data between the server and the users. Your primary focus will be development of all server-side logic, definition and maintenance of the central database, and ensuring high performance and responsiveness to requests from the front-end. You will also be responsible for integrating the front-end elements built by your coworkers into the application. A basic understanding of front-end technologies is therefore necessary as well.</p>

<h1>Responsibilities</h1>

<p><ul>
<li>Integration of user-facing elements developed by a front-end developers with server side logic</li>
<li>Building reusable code and libraries for future use</li>
<li>Optimization of the application for maximum speed and scalability</li>
<li>Implementation of security and data protection</li>
<li>Design and implementation of data storage solutions</li>
<li>{{Add other responsibilities that are relevant}}</li>
</ul></p>

<h1>Skills And Qualifications</h1>

<p><ul>
<li>Basic understanding of front-end technologies and platforms, such as JavaScript, HTML5, and CSS3</li>
<li>Good understanding of server-side CSS preprocessors, such as LESS and SASS</li>
<li>Understanding accessibility and security compliance {{Depending on a specific project}}</li>
<li>User authentication and authorization between multiple systems, servers, and environments</li>
<li>Integration of multiple data sources and databases into one system</li>
<li>Management of hosting environment, including database administration and scaling an application to support load changes</li>
<li>Data migration, transformation, and scripting</li>
<li>Setup and administration of backups</li>
<li>Outputting data in different formats</li>
<li>Understanding differences between multiple delivery platforms such as mobile vs desktop, and optimizing output to match the specific platform</li>
<li>Creating database schemas that represent and support business processes</li>
<li>Implementing automated testing platforms and unit tests</li>
<li>Proficient knowledge of a back-end programming language {{Depending on the specific case, a developer should have the knowledge of one or more of PHP, Python, Ruby, Java, .NET, JavaScript etc.}}</li>
<li>Proficient understanding of code versioning tools, such as Git</li>
<li>Proficient understanding of OWASP security principles</li>
<li>Understanding of “session management” in a distributed server environment</li>
</ul></p>'

            ], [
                'reference' => 'frontendDeveloper-456',
                'title' => 'Frontend developer',
                'email' => 'hr@jobtip.com',
                'company_id' => 1,
                'jobDescription' => '<h1>Company Introduction</h1>
<p>The Jobtip development team is
building complex and innovative
solution for the Social
Recruitment. These solutions
maximize the full potential of
clients companies by matching
their employment needs with the
right candidates, creating
unparalleled employees
satisfaction and productivity.</p>

<h1>Job Description</h1>
<p>We are looking for a Front-End Web Developer who is motivated to combine the art of design with the art of programming. Responsibilities will include translation of the UI/UX design wireframes to actual code that will produce visual elements of the application. You will work with the UI/UX designer and bridge the gap between graphical design and technical implementation, taking an active role on both sides and defining how the application looks as well as how it works.</p>

<h1>Responsibilities</h1>

<p><ul>
<li>Develop new user-facing features</li>
<li>Build reusable code and libraries for future use</li>
<li>Ensure the technical feasibility of UI/UX designs</li>
<li>Optimize application for maximum speed and scalability</li>
<li>Assure that all user input is validated before submitting to back-end</li>
<li>Collaborate with other team members and stakeholders</li>
<li>{{Add other responsibilities that are relevant}}</li>
</ul></p>

<h1>Skills And Qualifications</h1>

<p><ul>
<li>Basic understanding of front-end technologies and platforms, such as JavaScript, HTML5, and CSS3</li>
<li>Good understanding of server-side CSS preprocessors, such as LESS and SASS</li>
<li>Understanding accessibility and security compliance {{Depending on a specific project}}</li>
<li>User authentication and authorization between multiple systems, servers, and environments</li>
<li>Integration of multiple data sources and databases into one system</li>
<li>Management of hosting environment, including database administration and scaling an application to support load changes</li>
<li>Data migration, transformation, and scripting</li>
<li>Setup and administration of backups</li>
<li>Outputting data in different formats</li>
<li>Understanding differences between multiple delivery platforms such as mobile vs desktop, and optimizing output to match the specific platform</li>
<li>Creating database schemas that represent and support business processes</li>
<li>Implementing automated testing platforms and unit tests</li>
<li>Proficient knowledge of a back-end programming language {{Depending on the specific case, a developer should have the knowledge of one or more of PHP, Python, Ruby, Java, .NET, JavaScript etc.}}</li>
<li>Proficient understanding of code versioning tools, such as Git</li>
<li>Proficient understanding of OWASP security principles</li>
<li>Understanding of “session management” in a distributed server environment</li>
</ul></p>'

            ], [
                'reference' => 'headhunter-A1',
                'title' => 'Head hunter',
                'email' => 'hr@efisco.com',
                'company_id' => 2,
                'jobDescription' => '<h1>Job brief</h1>

<p>We are looking for a Headhunter to join our HR team and help us fill our open positions with qualified candidates.</p>

<p>Headhunter responsibilities include defining hiring criteria, sourcing potential candidates on social media and reaching out to prospects via email or phone. To be successful in this role, you should have excellent communication skills to interact with candidates and internal teams. You should also be familiar with online and offline sourcing techniques, like networking at career events and searching for potential hires through resume databases.</p>

<p>Ultimately, you will place qualified candidates in a timely manner and build talent pipelines for our future hiring needs.</p>

<h1>Responsibilities</h1>

<p><ul>
<li>Coordinate with hiring managers to define necessary requirements for open roles</li>
<li>Send recruiting emails to passive candidates and follow up when necessary</li>
<li>Browse resume databases and portfolio sites</li>
<li>Join social media groups and professional networks and interact with potential candidates</li>
<li>Advertise open positions to external networks</li>
<li>Ask for referrals from current employees, acquaintances and industry professionals</li>
<li>Maintain organized databases with candidates’ data (e.g. in our ATS)</li>
<li>Attend job fairs and organize career events</li>
<li>Keep in touch with past applicants</li>
<li>Use Boolean search to look for qualified candidates for hard-to-fill roles</li>
<li>Conduct benchmark research on compensation and benefits for various positions and seniority levels</li>
<li>Measure source of hire and time-to-fill for each role</li>
<li>Research and recommend new sourcing tools and techniques</li>
</ul></p>

<h1>Requirements</h1>

<p><ul>
<li>Proven work experience as a Headhunter, Recruiter or similar</li>
<li>Advanced knowledge of sourcing techniques (including Boolean search)</li>
<li>Hands-on experience with sourcing tools (e.g. resume databases and portfolio sites)</li>
<li>Familiarity with HR databases and Applicant Tracking Systems (ATSs)</li>
<li>Excellent communication and persuasion abilities (particularly when making cold calls and sending recruiting emails)</li>
<li>Time-management skills with the ability to handle multiple open roles simultaneously</li>
<li>Good decision-making skills</li>
<li>BSc degree in Human Resources Management or relevant field</li>
</ul></p>'

            ]
        ];
    }
}
