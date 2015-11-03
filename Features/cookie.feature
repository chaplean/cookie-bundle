Feature: Index

  Scenario: See a headband
    Given I am on homepage
    Then I should see an ".cc_banner-wrapper" element

  Scenario: Accept cookie
    Given: I am on homepage
    When I wait 1000 millisec
    And I click on ".cc_btn.cc_btn_accept_all"
    Then I should not see an ".cc_banner-wrapper" element