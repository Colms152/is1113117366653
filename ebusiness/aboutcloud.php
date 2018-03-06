<!DOCTYPE html>
<html>
    <head>
        <!-- In this head section the characters are set for website in order for it to be valid as per W3C's validator--> 
        <meta charset="utf-8" />
        <!-- Title is set for this webpage--> 
        <title>About Cloud Services</title>
        <!--Linking to relevent style sheet for this page--> 
         <link rel="stylesheet" href="cvs.css">
    </head>
    <body>
        <!-- nav bar, header and footer called with php from a html file -->
        <?php include("repeated_features.html") ?>
       <!-- This is a division which is styled with css as the main content section of the webpage-->
        <div class="content">
            <h3>About Cloud</h3>
            <br>
            <p>Below is information explaining on the four types of cloud serivices we sell. This information has been sourced from wikipeadia and whatis. Below each Service explanation is a link an example of that service. The examples given are also the products we sell in our services store.
            </p>
            <br>
            <h4>Software as a Service (Saas)</h4>
            <br>
            <p>Software as a service (SaaS; pronounced /sæs/[1]) is a software licensing and delivery model in which software is licensed on a subscription basis and is centrally hosted.[2][3] It is sometimes referred to as "on-demand software",[4] and was formerly referred to as "software plus services" by Microsoft.[5] SaaS is typically accessed by users using a thin client via a web browser. SaaS has become a common delivery model for many business applications, including office software, messaging software, payroll processing software, DBMS software, management software, CAD software, development software, gamification, virtualization,[4] accounting, collaboration, customer relationship management (CRM), Management Information Systems (MIS), enterprise resource planning (ERP), invoicing, human resource management (HRM), talent acquisition, learning management systems, content management (CM), and service desk management.[6] SaaS has been incorporated into the strategy of nearly all leading enterprise software companies.[citation needed][7][8]

According to a Gartner Group estimate, SaaS sales in 2010 reached $10 billion.[9]

The term "Software as a Service" (SaaS) is considered to be part of the nomenclature of cloud computing, along with Infrastructure as a Service (IaaS), Platform as a Service (PaaS), Desktop as a Service (DaaS),[10] managed software as a service (MSaaS), mobile backend as a service (MBaaS), and information technology management as a service (ITMaaS).
</p>
            <a href="https://www.salesforce.com/">Salesforce - An example of this technology | This is the poduct we sell.</a>
            <br>
            <h4>Platform as a Service (Paas)</h4>
            <br>
            <p>Platform as a Service (PaaS) or application platform as a Service (aPaaS) or platform base service is a category of cloud computing services that provides a platform allowing customers to develop, run, and manage applications without the complexity of building and maintaining the infrastructure typically associated with developing and launching an app.[1][2][3] PaaS can be delivered in three ways: as a public cloud service from a provider, where the consumer controls software deployment with minimal configuration options, and the provider provides the networks, servers, storage, operating system (OS), middleware (e.g. Java runtime, .NET runtime, integration, etc.), database and other services to host the consumer's application; as a private service (software or appliance) inside the firewall; or as software deployed on a public infrastructure as a service.
            </p>
            <a href="https://aws.amazon.com/cloud9/">Cloud 9 - An example of this technology | This is the poduct we sell.</a>
            <br>
            <h4>Infrastructure as a Service (Iaas)</h4>
            <br>
            <p>Infrastructure as a service (IaaS) refers to online services that provide high-level APIs used to dereference various low-level details of underlying network infrastructure like physical computing resources, location, data partitioning, scaling, security, backup etc. A hypervisor, such as Xen, Oracle VirtualBox, Oracle VM, KVM, VMware ESX/ESXi, or Hyper-V, LXD, runs the virtual machines as guests. Pools of hypervisors within the cloud operational system can support large numbers of virtual machines and the ability to scale services up and down according to customers' varying requirements. Linux containers run in isolated partitions of a single Linux kernel running directly on the physical hardware. Linux cgroups and namespaces are the underlying Linux kernel technologies used to isolate, secure and manage the containers. Containerisation offers higher performance than virtualization, because there is no hypervisor overhead. Also, container capacity auto-scales dynamically with computing load, which eliminates the problem of over-provisioning and enables usage-based billing.[1] IaaS clouds often offer additional resources such as a virtual-machine disk-image library, raw block storage, file or object storage, firewalls, load balancers, IP addresses, virtual local area networks (VLANs), and software bundles.[2]

The NIST's definition of cloud computing defines Infrastructure as a Service as:[3]

The capability provided to the consumer is to provision processing, storage, networks, and other fundamental computing resources where the consumer is able to deploy and run arbitrary software, which can include operating systems and applications. The consumer does not manage or control the underlying cloud infrastructure but has control over operating systems, storage, and deployed applications; and possibly limited control of select networking components (e.g., host firewalls).

According to the Internet Engineering Task Force (IETF), the most basic cloud-service model is that of providers offering IT infrastructure — virtual machines and other resources — as a service to subscribers.

IaaS-cloud providers supply these resources on-demand from their large pools of equipment installed in data centers. For wide-area connectivity, customers can use either the Internet or carrier clouds (dedicated virtual private networks). To deploy their applications, cloud users install operating-system images and their application software on the cloud infrastructure.[4][unreliable source?] In this model, the cloud user patches and maintains the operating systems and the application software. Cloud providers typically bill IaaS services on a utility computing basis: cost reflects the amount of resources allocated and consumed.
</p>
            <a href="https://aws.amazon.com/">Amazon Web Services - An example of this technology | This is the poduct we sell.</a>
            <br>
            <h4>Communication as a Service (Caas)</h4>
            <br>
            <p>Communications as a Service (CaaS) is an outsourced enterprise communications solution that can be leased from a single vendor. Such communications can include voice over IP (VoIP or Internet telephony), instant messaging (IM), collaboration and videoconference applications using fixed and mobile devices. CaaS has evolved along the same lines as Software as a Service (SaaS).

The CaaS vendor is responsible for all hardware and software management and offers guaranteed Quality of Service (QoS). CaaS allows businesses to selectively deploy communications devices and modes on a pay-as-you-go, as-needed basis. This approach eliminates the large capital investment and ongoing overhead for a system whose capacity may often exceed or fall short of current demand.

CaaS offers flexibility and expandability that small and medium-sized business might not otherwise afford, allowing for the addition of devices, modes or coverage on demand. The network capacity and feature set can be changed from day to day if necessary so that functionality keeps pace with demand and resources are not wasted. There is no risk of the system becoming obsolete and requiring periodic major upgrades or replacement.
</p>
            <a href="gmail.com">Gmail - An example of this technology | This is the poduct we sell.</a>
        </div>
        
    </body>
</html>