About Student Council Attendance

# Introduction #

This web based tool was designed to manage the attendance records for a student council.  The system has business logic hard coded inside of the tool which may make it less usable by other organizations.  This is mostly embedded the reports (display.php) part of the program.  However, the web based interface does not expose several of the tables that would be required to make this program work with other groups.  This includes member types and meeting types.


# Details #

## Member Management ##
Manages current information about members.  The ability to add and update members is the main feature.  Additionally, the ability to add/remove acchievements and add/remove a member from a committee is included.

## Attendance ##
Attendance records are broken down by semester and further by meetings.  Each meeting have an assigned meeting type.  The meetings have attendance records associated with them that tie together a specific meeting, member, member position, and status.  When taking attendance the main value

## Committees ##
Committees have associated names and descriptions along with a chair or manager that is a member of council.  Additionally, committees have an associated member list where members can be added or removed from a committee as they join or leave a committee.

## Achievements ##
Achievements have associated names, descriptions, images, point value, and a goal.  When a member is awarded an achievement it associates a member with an individual achievement along with tracking the achievements status.  If the progress is equal to the goal the member has earned the achievement.  Dates are tracked as member are awarded achievements.