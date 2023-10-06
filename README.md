# CS3400-CyberSecurity_Project

# Task 02

After a detailed initial assessment of the IT infrastructure at Pandora Company Limited, you've made a concerning discovery. All operating systems on the servers appear to be running on default installation settings and configurations. This is a highly risky practice and leaves the company vulnerable to a myriad of potential cyber threats.

# The existing setup includes:

   1. Web Server: Apache web server running on Rocky Linux 9 Server.

   2. Application Server: Internal web applications on Windows Server 2019 R2.

   3. Database Server: MySQL/MariaDB on Rocky Linux 9.

The lack of security hardening on these systems is a serious oversight. As the consulting security engineer, you must address this critical gap in Pandora's cybersecurity posture.

 

# Assignment Tasks:

1. Identify a Reputed Hardening Framework:

Considering the operating systems in use, identify a trusted and globally recognized framework for security hardening. One suggestion is the Center for Internet Security (CIS) benchmarks. However, you may propose any other recognized standard, provided you justify its reliability and applicability.

For Rocky Linux 9, find and retrieve the matching CIS benchmark (or from your chosen framework). If not directly available, leverage the closest version or a general guideline and adapt accordingly.
For Windows Server 2019 R2, get the relevant hardening guideline.
2. Identify the Key Hardening Sections:

Categorize and list the primary sections these guidelines address. Examples include:

Filesystem Configurations
Service Settings
User and Account Management
Logging and Monitoring
... and so on.
3. Analyze and Document Improvements over Default Settings:

For each of the identified key sections:

a) State the Default Settings: Describe the initial configuration that typically comes with a standard OS installation.

b) State the Recommended Settings: Highlight the hardening measures proposed by the chosen framework.

c) Discuss the Security Implications: Detail how the recommended setting improves security over the default configuration, making the system more resilient against potential cyber threats.

4. Proposal for Implementation for Future Server Installations:

Based on your analysis, provide a clear and structured plan for Pandora Company Limited to implement these hardening measures in upcoming server installations.



# Deliverables

Report Content:

Produce a 3-4 page PDF report addressing the assignment tasks outlined earlier.

Detail the importance of OS security hardening, emphasizing the implications for Pandora Company Limited.

# Task 03

You've discovered that the corporate website, explicitly served over http://www.pandora.lk, was developed using WordPress and launched two years ago. After its inauguration, the website's developers provided the admin credentials in a sealed envelope and concluded their engagement. Remarkably, since its launch, the sealed envelope containing the admin credentials hasn't been opened by any member of the technical team.

The website hosts a "Sales Inquiries" form. This form gathers several pieces of data from potential clients, notably their Name, Mobile Number, Date of Birth, NIC, and Home Address. 

A preliminary glance at certain configuration files indicates that the WordPress installation utilizes the MySQL/MariaDB root user for database interactions. 

Assignment Tasks: 

Assess the Current State: Enumerate potential risks based on your observations and drawing from best practices in cybersecurity. 
Identify Potential Vulnerabilities: What could be the potential vulnerabilities or misconfigurations? 
Propose Security Interventions: Reflecting on your discoveries, recommend security measures that could bolster the website's security posture. It's vital to consider the broader ramifications of each vulnerability you identify. 
Recommend Best Practices for the Future: Beyond immediate issues, contemplate the website's continuous security and maintenance. How can Pandora Company Limited ensure the site stays secure and current? 
Deliverables 

Report Content: 

Compose a 2-3 page PDF report addressing the assignment tasks described above. 


# Task 04

During your ongoing tenure at Pandora Company Limited, you've discovered that 25 individual Windows PCs operate across various departments. Each PC has its setup, resulting in a lack of uniformity concerning user policies, software installations, and security configurations. Observations include employees using unsafe passwords like "1234", challenges in deploying updates uniformly across all computers, and inconsistent access restrictions.

You believe there's an opportunity to recommend a more centralized user/system management approach, addressing many observed challenges.

# Assignment Task:

# Unified Management Exploration:

What are the cybersecurity challenges and risks a company faces with a decentralized PC management system?
Propose a commonly-adopted enterprise solution to address the issues observed at Pandora Company.
Advantages & Benefits Analysis:

Dive into the benefits of transitioning to a unified user/system management system.
Additionally, reflect on potential indirect advantages.
Recommendation Report:

Based on your exploration and analysis, prepare a detailed recommendation for Pandora Company Limited.
Outline the steps the company should take to transition from its current decentralized approach to a centralized system. This should encompass both technical actions and potential change management strategies.
Deliverables:

Report Content: Craft a comprehensive 3-4 page PDF report addressing the assignment tasks. Clearly segment your report into sections: Unified Management Exploration, Advantages & Benefits Analysis, and Recommendation Report.
