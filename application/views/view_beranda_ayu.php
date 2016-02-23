<!DOCTYPE html>
<html>
<head>
      <title>AYU</title>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/materialize.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <!-- Compiled and minified JavaScript -->
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <!-- For load material icon -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="<?php echo base_url();?>assets/js/materialize.js"></script>
      <script type="text/javascript">
    $(document).ready(function() {
    $('select').material_select();
  });
  </script>
</head>
<body>

<div class="navbar-fixed">
  <nav class="white">
    <div class="container">
      <div class="nav-wrapper">
        <a  href="https://adbeus.com"><img width="35" class="icon hide-on-small-and-down" src="https://adbeus.com/wp-content/uploads/2015/02/adbeus_icon-02.png" alt=""></a>
        <a  href="https://adbeus.com" class="brand-logo"></a>
        <a  href="https://adbeus.com" class="brand-logo">SENIOR MEMBER CNC</a>
      </div>
    </div>
  </nav>
</div>
<div class="navbar-fixed experience-bar">
            <nav class="experience-bar">
                <div class="nav-wrapper blue-grey darken-4 experience-buttons">
                    <div class="col-xs z-depth-2">
                        <div class="input-field col s12 l12 m12" style="text-align: left;font-size: 17px;">
                          <div class="create_an_event">
                          <div class="container">
                            <span>RESEARCH MILESTONE</span>
                            <div class="right yellow-text">AYU</div>
                          </div>
                          </div>
                        </div>
                    </div>
                </div>
            </nav>
  </div>
<div class="container">
  <div class="card z-depth-5">
    <div class="card-content">
      <div class="row col s12 m12 l6">
        <table class="bordered highlight">
        <thead>
          <tr>
              <th data-field="id">Material</th>
              <th data-field="name">Documentation</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><BLOCKQUOTE>1.0 Operation of IP Data Networks</BLOCKQUOTE></td>
            <td>
            <?php if (isset($list_member[0])) {?>
              <a class="waves-effect waves-light btn" href="<?php echo base_url(); ?>/files/<?php echo $list_member[0]['filename'];?>">Download</a>
            <?php } else { ?>
              <a class="waves-effect waves-light btn red">BELUM</a>
            <?php 
            }
            ?>
            </td>
          </tr>
          <tr>
            <td>1.1 Recognize the purpose and functions of various network devices such as routers,
switches, bridges and hubs</td>
            <td>
            </td>
          </tr>
          <tr>
            <td>1.2 Select the components required to meet a given network specification</td>
            <td> 
            </td>
          </tr>
          <tr>
            <td><blockquote>2.0 LAN Switching Technologies</blockquote></td>
            <td>
            <?php if (isset($list_member[1])) {?>
              <a class="waves-effect waves-light btn" href="<?php echo base_url(); ?>/files/<?php echo $list_member[1]['filename'];?>">Download</a>
            <?php } else { ?>
              <a class="waves-effect waves-light btn red">BELUM</a>
            <?php 
            }
            ?>
            </td>
          </tr>
          <tr>
            <td>2.1 Determine the technology and media access control method for Ethernet networks</td>
            <td></td>
          </tr>
          <tr>
            <td>2.2 Identify basic switching concepts and the operation of Cisco switches <br>
                <dd>2.2.a Collision Domains<br></dd>
                <dd>2.2.b Broadcast Domains<br></dd>
                <dd>2.2.c Ways to switch<br></dd>
                <dd>2.2.c (i) Store<br></dd>
                <dd>2.2.c (ii) Forward<br></dd>
                <dd>2.2.c (iii) Cut through<br></dd>
                <dd>2.2.d CAM Table</dd>
            </td>
            <td></td>
          </tr>
          <tr>
            <td>2.3 Configure and verify initial switch configuration including remote access management<br>
                <dd>2.3.a hostname</dd>
                <dd>2.3.b mgmt ip address<br></dd>
                <dd>2.3.c ip default-gateway<br></dd>
                <dd>2.3.d local user and password<br></dd>
                <dd>2.3.e enable secret password<br></dd>
                <dd>2.3.f console and VTY logins<br></dd>
                <dd>2.3.g exec-timeout</dd>
                <dd>2.3.h service password encryption</dd>
                <dd>2.3.i copy run start</dd>
            </td>
            <td></td>
          </tr>
          <tr>
            <td>2.4 Verify network status and switch operation using basic utilities such as <br>
                <dd>2.4.a ping</dd>
                <dd>2.4.b telnet<br></dd>
                <dd>2.4.c SSH</dd>
            </td>
            <td></td>
          </tr>
          <tr>
            <td>2.5 Describe how VLANs create logically separate networks and the need for routing between them<br>
                <dd>2.5.a Explain network segmentation and basic traffic management concepts</dd>
            </td>
            <td></td>
          </tr>
          <tr>
            <td>2.6 Configure and verify VLANs</td>
            <td></td>
          </tr>
          <tr>
            <td>2.7 Configure and verify trunking on Cisco switches<br>
                <dd>2.7.a dtp (topic)<br></dd>
                <dd>2.7.b auto-negotiation</dd>
            </td>
            <td></td>
          </tr>
          <tr>
            <td>2.8 Identify enhanced switching technologies<br>
                <dd>2.8.a RSTP<br></dd>
                <dd>2.8.b PVSTP<br></dd>
                <dd>2.8.c Etherchannels</dd>
            </td>
            <td></td>
          </tr>
          <tr>
             <td>2.9 Configure and verify PVSTP operation<br>
                <dd>2.9.a Describe root bridge election<br></dd>
                <dd>2.9.b Spanning tree mode</dd>
            </td>
            <td></td>
          </tr>
          <tr>
            <td><blockquote>3.0 IP Addressing (IPv4/IPv6)</blockquote>
            </td>
             <td>
            <?php if (isset($list_member[2])) {?>
              <a class="waves-effect waves-light btn" href="<?php echo base_url(); ?>/files/<?php echo $list_member[2]['filename'];?>">Download</a>
            <?php } else { ?>
              <a class="waves-effect waves-light btn red">BELUM</a>
            <?php 
            }
            ?>
            </td>
          </tr>
          <tr>
            <td>3.1 Describe the operation and necessity of using private and public IP addresses for IPv4
addressing</td>
            <td></td>
          </tr>
          <tr>
            <td>3.2 Identify the appropriate IPv6 addressing scheme to satisfy addressing requirements in a
LAN/WAN environment</td>
            <td></td>
          </tr>
          <tr>
            <td>3.3 Identify the appropriate IPv4 addressing scheme using VLSM and summarization to
satisfy addressing requirements in a LAN/WAN environment</td>
            <td></td>
          </tr>
          <tr>
            <td>3.4 Describe the technological requirements for running IPv6 in conjunction with IPv4<br>
                <dd>3.4.a dual stack<br></dd>
            </td>
            <td></td>
          </tr>
          <tr>
             <td>3.5 Describe IPv6 addresses<br>
                <dd>3.5.a global unicast<br></dd>
                <dd>3.5.b multicast<br></dd>
                <dd>3.5.c link local<br></dd>
                <dd>3.5.d unique local<br></dd>
                <dd>3.5.e eui 64<br></dd>
                <dd>3.5.f auto-configuration</dd>
            </td>
            <td></td>
          </tr>
          <tr>
            <td><blockquote>4.0 IP Routing Technologies</blockquote>
            </td>
             <td>
            <?php if (isset($list_member[3])) {?>
              <a class="waves-effect waves-light btn" href="<?php echo base_url(); ?>/files/<?php echo $list_member[3]['filename'];?>">Download</a>
            <?php } else { ?>
              <a class="waves-effect waves-light btn red">BELUM</a>
            <?php 
            }
            ?>
            </td>
          </tr>
          <tr>
             <td>4.1 Describe basic routing concepts<br>
                <dd>4.1.a packet forwarding<br></dd>
                <dd>4.1.b router lookup process<br></dd>
                <dd>4.1.c Process Switching/Fast Switching/CEF</dd>
            </td>
            <td></td>
          </tr>
          <tr>
             <td>4.2 Configure and verify utilizing the CLI to set basic Router configuration<br>
                <dd>4.2.a hostname<br></dd>
                <dd>4.2.b local user and password<br></dd>
                <dd>4.2.c enable secret password<br></dd>
                <dd>4.2.d console & VTY logins<br></dd>
                <dd>4.2.e exec-timeout<br></dd>
                <dd>4.2.f service password encryption<br></dd>
                <dd>4.2.g interface IP Address & loopback<br></dd>
                <dd>4.2.h banner<br></dd>
                <dd>4.2.i motd<br></dd>
                <dd>4.2.j copy run start</dd>
            </td>
            <td></td>
          </tr>
          <tr>
             <td>4.3 Configure and verify operation status of a device interface<br>
                <dd>4.3.a Serial<br></dd>
                <dd>4.3.b Ethernet</dd>
            </td>
            <td></td>
          </tr>
          <tr>
            <td>4.4 Verify router configuration and network connectivity using<br>
                <dd>4.4.a ping<br></dd>
                <dd>4.4.b traceroute<br></dd>
                <dd>4.4.c telnet<br></dd>
                <dd>4.4.d SSH<br></dd>
                <dd>4.4.e sh cdp neighbors<dd>
            </td>
            <td></td>
          </tr>
          <tr>
            <td>4.5 Configure and verify routing configuration for a static or default route given specific
routing requirements
            </td>
            <td></td>
          </tr>
          <tr>
            <td>4.6 Differentiate methods of routing and routing protocols<br>
                <dd>4.6.a Static vs. dynamic<br></dd>
                <dd>4.6.b Link state vs. distance vector<br></dd>
                <dd>4.7.c Configure OSPv3<br></dd>
                <dd>4.6.c next hop<br></dd>
                <dd>4.6.d ip routing table<br></dd>
                <dd>4.6.e Passive Interfaces (how they work) <br></dd>
                <dd>4.6.f Admin distance<br></dd>
                <dd>4.6.g split horizon<br></dd>
                <dd>4.6.h metric</dd>
            </td>
            <td></td>
          </tr>
          <tr>
            <td>4.7 Configure and verify OSPF<br>
                <dd>4.7.a Benefit of single area<br></dd>
                <dd>4.7.b Configure OSPv2 <br></dd>
                <dd>4.7.c Configure OSPv3<br></dd>
                <dd>4.7.d Router ID<br></dd>
                <dd>4.7.e Passive Interface<br></dd>
                <dd>4.7.f Discuss multi-area OSPF<br></dd>
                <dd>4.7.g Understand LSA types and purpose</dd>
            </td>
            <td></td>
          </tr>
          <tr>
            <td>4.8 Configure and verify interVLAN routing (Router on a stick<br>
                <dd>4.8.a sub interfaces<br></dd>
                <dd>4.8.b upstream routing<br></dd>
                <dd>4.8.c encapsulation</dd>
            </td>
            <td></td>
          </tr>
          <tr>
            <td>4.9 Configure SVI interfaces
            </td>
            <td></td>
          </tr>
          <tr>
           <td>4.10 Manage Cisco IOS Files<br>
                <dd>4.10.a Boot Preferences<br></dd>
                <dd>4.10.b Cisco IOS Images (15)<br></dd>
                <dd>4.10.c Licensing (Show and Change)</dd>
            </td>
            <td></td>
          </tr>
          <tr>
           <td>4.11 Configure and verify EIGRP (single AS)<br>
                <dd>4.11.a Feasible Distance/Feasible Successors/Administrative distance<br></dd>
                <dd>4.11.b Feasibility condition<br></dd>
                <dd>4.11.c Metric composition<br></dd>
                <dd>4.11.d Router ID<br></dd>
                <dd>4.11.e Auto summary<br></dd>
                <dd>4.11.f Path Selection<br></dd>
                <dd>4.11.g Load Balancing (Equal and Unequal)</dd>
            </td>
            <td></td>
          </tr>
          <tr>
            <td><blockquote>5.0 IP Services</blockquote></td>
            <td>
            <?php if (isset($list_member[4])) {?>
              <a class="waves-effect waves-light btn" href="<?php echo base_url(); ?>/files/<?php echo $list_member[4]['filename'];?>">Download</a>
            <?php } else { ?>
              <a class="waves-effect waves-light btn red">BELUM</a>
            <?php 
            }
            ?>
            </td>
          </tr>
          <tr>
            <td>5.1 Configure and verify DHCP (IOS Router)<br>
                <dd>5.1.a Configuring router interfaces to use DHCP<br></dd>
                <dd>5.1.b DHCP options (Basic overview and functionality)<br></dd>
                <dd>5.1.c Excluded addresses<br></dd>
                <dd>5.1.d Lease time</dd>
            </td>
            <td></td>
          </tr>
          <tr>
            <td>5.3 Configure and verify ACLs in a network environment<br>
                <dd>5.3.a named<br></dd>
                <dd>5.3.b numbered<br></dd>
                <dd>5.3.c Log option</dd>
            </td>
            <td></td>
          </tr>
          <tr>
           <td>5.4 Identify the basic operation of NAT<br>
                <dd>5.4.a purpose<br></dd>
                <dd>5.4.b pool<br></dd>
                <dd>5.4.c static<br></dd>
                <dd>5.4.d 1 to 1<br></dd>
                <dd>5.4.e overloading<br></dd>
                <dd>5.4.f source addressing<br></dd>
                <dd>5.4.g one way NAT</dd>
            </td>
            <td></td>
          </tr>
          <tr>
            <td>5.5 Configure and verify NAT for given network requirements
            </td>
            <td></td>
          </tr>
          <tr>
           <td>5.6 Configure and verify NTP as a client</td>
           <td></td>
          </tr>
          <tr>
             <td>5.7 Recognize High availability (FHRP)<br>
                <dd>5.7.a VRRP<br></dd>
                <dd>5.7.b HSRP<br></dd>
                <dd>5.7.c GLBP</dd>
            </td>
            <td></td>
          </tr>
          <tr>
            <td>5.8 Configure and verify syslog<br>
                <dd>5.8.a Utilize syslog output</dd>
            </td>
            <td></td>
          </tr>
          <tr>
             <td>5.9 Describe SNMP v2 and v3.</td>
            <td></td>
          </tr>
          <tr>
            <td><blockquote>6.0 Network Device Security</blockquote> 
            </td>
            <td>
            <?php if (isset($list_member[5])) {?>
              <a class="waves-effect waves-light btn" href="<?php echo base_url(); ?>/files/<?php echo $list_member[5]['filename'];?>">Download</a>
            <?php } else { ?>
              <a class="waves-effect waves-light btn red">BELUM</a>
            <?php 
            }
            ?>
            </td>
          </tr>
          <tr>
             <td>6.1 Configure and verify network device security features<br>
                <dd>6.1.a Device password security<br></dd>
                <dd>6.1.b Enable secret vs. enable<br></dd>
                <dd>6.1.c Transport (disable telnet and SSH)<br></dd>
                <dd>6.1.d VTYs<br></dd>
                <dd>6.1.e physical security<br></dd>
                <dd>6.1.f service password<br></dd>
                <dd>6.1.g Describe external authentication methods</dd>
            </td>
            <td></td>
          </tr>
          <tr>
            <td>6.2 Configure and verify Switch Port Security<br>
                <dd>6.2.a Sticky MAC<br></dd>
                <dd>6.2.b MAC address limitation<br></dd>
                <dd>6.2.c static/dynamic<br></dd>
                <dd>6.2.d violation modes (err disable, shutdown and protects restrict)<br></dd>
                <dd>6.2.e Shutdown unused ports <br></dd>
                <dd>6.2.f err disable recovery<br></dd>
                <dd>6.2.g Assign unused ports in unused VLANs<br></dd>
                <dd>6.2.h Putting Native VLAN to other than VLAN 1</dd>
            </td>
            <td></td>
          </tr>
          <tr>
             <td>6.3 Configure and verify ACLs to filter network traffic
            </td>
            <td></td>
          </tr>
          <tr>
           <td>6.4 Configure and verify ACLs to limit telnet and SSH access to the router
            </td>
            <td></td>
          </tr>
          <tr>
            <td><blockquote>7.0 Troubleshooting</blockquote>
            </td>
            <td>
            <?php if (isset($list_member[6])) {?>
              <a class="waves-effect waves-light btn" href="<?php echo base_url(); ?>/files/<?php echo $list_member[6]['filename'];?>">Download</a>
            <?php } else { ?>
              <a class="waves-effect waves-light btn red">BELUM</a>
            <?php 
            }
            ?>
            </td>
          </tr>
          <tr>
            <td>7.1 Troubleshoot and correct common problems associated with IP addressing and host
configurations</td>
            <td></td>
          </tr>
           <tr>
           <td>7.2 Troubleshoot and resolve VLAN problems<br>
                <dd>7.2.a Identify that VLANs are configured<br></dd>
                <dd>7.2.b Verify port membership correct<br></dd>
                <dd>7.2.c Correct IP address configured</dd>
            </td>
            <td></td>
          </tr>
           <tr>
           <td>7.3 Troubleshoot and resolve trunking problems on Cisco switches<br>
                <dd>7.3.a Verify correct trunk states<br></dd>
                <dd>7.3.b Verify correct encapsulation configured<br></dd>
                <dd>7.3.c Correct VLANs allowed</dd>
            </td>
            <td></td>
          </tr>
           <tr>
           <td>7.4 Troubleshoot and resolve ACL issues<br>
                <dd>7.4.a Verify statistics<br></dd>
                <dd>7.4.b Verify permitted networks<br></dd>
                <dd>7.4.c Verify direction (Interface)</dd>
            </td>
            <td></td>
          </tr>
           <tr>
           <td>7.6 Identify and correct common network problems
            </td>
            <td></td>
          </tr>
           <tr>
           <td>7.7 Troubleshoot and resolve spanning tree operation issues<br>
                <dd>7.7.a Verify root switch<br></dd>
                <dd>7.7.b Verify priority<br></dd>
                <dd>7.7.c Verify mode is correct<br></dd>
                <dd>7.7.d Verify port states</dd>
            </td>
            <td></td>
          </tr>
           <tr>
           <td>7.8 Troubleshoot and resolve routing issues<br>
                <dd>7.8.a Verify routing is enabled (sh ip protocols)<br></dd>
                <dd>7.8.b Verify routing table is correct<br></dd>
                <dd>7.8.c Verify correct path selection</dd>
            </td>
            <td></td>
          </tr>
           <tr>
           <td>7.9 Troubleshoot and resolve OSPF problems<br>
                <dd>7.9.a Verify neighbor adjacencies<br></dd>
                <dd>7.9.b Verify hello and dead timers<br></dd>
                <dd>7.9.c Verify OSPF area<br></dd>
                <dd>7.9.d Verify interface MTU<br></dd>
                <dd>7.9.e Verify network types<br></dd>
                <dd>7.9.f Verify neighbor states<br></dd>
                <dd>7.9.g Review OSPF topology table</dd>
            </td>
            <td></td>
          </tr>
           <tr>
           <td>7.10 Troubleshoot and resolve EIGRP problems<br>
                <dd>7.10.a Verify neighbor adjacencies<br></dd>
                <dd>7.10.b Verify AS number<br></dd>
                <dd>7.10.c Verify load balancing<br></dd>
                <dd>7.10.d Split horizon</dd>
            </td>
            <td></td>
          </tr>
           <tr>
           <td>7.11 Troubleshoot and resolve interVLAN routing problems<br>
                <dd>7.11.a Verify connectivity<br></dd>
                <dd>7.11.b Verify encapsulation<br></dd>
                <dd>7.11.c Verify subnet<br></dd>
                <dd>7.11.d Verify native VLAN<br></dd>
                <dd>7.11.e Port mode trunk status</dd>
            </td>
            <td></td>
          </tr>
           <tr>
           <td>7.12 Troubleshoot and resolve WAN implementation issues
            </td>
            <td></td>
          </tr>
           <tr>
           <td>7.14 TS EtherChannel problems
            </td>
            <td></td>
          </tr>
           <tr>
           <td><blockquote>8.0 WAN Technologies</blockquote>
            </td>
            <td>
            <?php if (isset($list_member[7])) {?>
              <a class="waves-effect waves-light btn" href="<?php echo base_url(); ?>/files/<?php echo $list_member[7]['filename'];?>">Download</a>
            <?php } else { ?>
              <a class="waves-effect waves-light btn red">BELUM</a>
            <?php 
            }
            ?>
            </td>
          </tr>
           <tr>
           <td>8.1 Identify different WAN Technologies<br>
                <dd>8.1.a Metro ethernet<br></dd>
                <dd>8.1.b VSAT<br></dd>
                <dd>8.1.c Cellular 3g/4g<br></dd>
                <dd>8.1.d MPLS<br></dd>
                <dd>8.1.e T1/E1<br></dd>
                <dd>8.1.f ISDN<br></dd>
                <dd>8.1.h Frame relay<br></dd>
                <dd>8.1.i Cable<br></dd>
                <dd>8.1.j VPN</dd>
            </td>
            <td></td>
          </tr>
           <tr>
           <td>8.2 Configure and verify a basic WAN serial connection
            </td>
            <td></td>
          </tr>
           <tr>
           <td>8.3 Configure and verify a PPP connection between Cisco routers
            </td>
            <td></td>
          </tr>
           <tr>
           <td>8.4 Configure and verify frame relay on Cisco routers
            </td>
            <td></td>
          </tr>
           <tr>
           <td>8.5 Implement and troubleshoot PPPoE
            </td>
            <td></td>
          </tr>
        </tbody>
      </table>
      </div>
      </div>
    </div>
    </div>
  </div>

<footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2016 <a class="grey-text text-lighten-1" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank"></a> All rights reserved.
                <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://labcnc.com/">SM 2016 Web Division</a></span>
            </div>
        </div>
    </footer>
</body>
</html>